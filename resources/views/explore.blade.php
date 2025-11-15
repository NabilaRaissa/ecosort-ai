@extends('layout')

@section('content')
<!-- Chatbot UI — EcoSort theme (green) -->
<style>
  :root{
    --eco-green: #0FA958;
    --eco-green-soft: #57CC99;
    --bg: #f6fbf8;
    --card: #ffffff;
    --muted: #7b8794;
  }

  /* wrapper: beri jarak dari navbar supaya tidak ketutup */
  .chat-wrapper {
    margin-top: 110px; /* sesuaikan kalau navbar lebih tinggi */
    display: flex;
    justify-content: center;
    padding: 28px 16px;
    background: var(--bg);
    min-height: calc(100vh - 110px);
  }

  /* floating card */
  .chat-card {
    width: 100%;
    max-width: 880px;
    background: linear-gradient(180deg, rgba(255,255,255,0.98), rgba(255,255,255,0.96));
    border-radius: 16px;
    box-shadow: 0 10px 30px rgba(13, 47, 25, 0.08);
    overflow: hidden;
    display: grid;
    grid-template-columns: 1fr 330px;
    gap: 0;
    border: 1px solid rgba(15,169,88,0.06);
  }

  /* left: chat area */
  .chat-area {
    padding: 18px 18px 12px 18px;
    display: flex;
    flex-direction: column;
    gap: 12px;
  }

  .chat-header {
    display:flex;
    align-items:center;
    gap:12px;
    padding-bottom:8px;
  }
  .chat-header .avatar {
    width:48px;height:48px;border-radius:12px;background:linear-gradient(135deg,var(--eco-green-soft),var(--eco-green));
    display:flex;align-items:center;justify-content:center;color:#fff;font-weight:700;box-shadow:0 4px 12px rgba(15,169,88,0.18);
  }
  .chat-header h3 { margin:0;font-size:18px }
  .chat-header p { margin:0;color:var(--muted);font-size:13px }

  #chat-container {
    flex:1;
    overflow-y:auto;
    padding-right:6px;
    display:flex;
    flex-direction:column;
    gap:10px;
  }

  /* message bubble */
  .msg {
    display:flex;
    gap:10px;
    align-items:flex-end;
    width:100%;
  }
  .msg .bubble {
    padding:12px 14px;
    border-radius:14px;
    max-width:72%;
    line-height:1.4;
    font-size:14px;
    box-shadow: 0 6px 12px rgba(8,20,12,0.03);
    animation: msgIn .12s ease;
  }
  @keyframes msgIn { from { opacity: 0; transform: translateY(6px) } to { opacity:1; transform:translateY(0) } }

  /* bot (left) */
  .msg.bot { justify-content:flex-start; }
  .msg.bot .avatar-sm { width:36px;height:36px;border-radius:8px;background:var(--eco-green-soft);display:flex;align-items:center;justify-content:center;color:#fff;font-weight:700;flex-shrink:0 }
  .msg.bot .bubble { background: #f3f9f4; color: #1f2937; border-top-left-radius:6px; }

  /* user (right) */
  .msg.user { justify-content:flex-end; flex-direction:row-reverse; }
  .msg.user .avatar-sm { width:36px;height:36px;border-radius:8px;background:#cfeeda;display:flex;align-items:center;justify-content:center;color:#064a2f;font-weight:700;flex-shrink:0 }
  .msg.user .bubble { background: linear-gradient(90deg, #dcf8e3, #bff0c6); color:#063a22; border-top-right-radius:6px; }

  /* typing indicator */
  .typing {
    display:flex;
    align-items:center;
    gap:8px;
    padding:10px 12px;
    border-radius:12px;
    background: #f0f7f2;
    width: max-content;
  }
  .dot {
    width:8px;height:8px;border-radius:50%;background:#9bd7a8;opacity:0.9;
    animation: bounce 1s infinite;
  }
  .dot:nth-child(2){ animation-delay: .15s }
  .dot:nth-child(3){ animation-delay: .3s }
  @keyframes bounce { 0% { transform: translateY(0) } 50% { transform: translateY(-6px) } 100% { transform: translateY(0) } }

  /* right: info panel */
  .info-panel {
    padding:18px;
    border-left:1px solid rgba(15,169,88,0.04);
    background: linear-gradient(180deg, rgba(87,204,153,0.03), rgba(255,255,255,0.02) );
  }
  .info-panel h4 { margin:0 0 8px 0 }
  .info-list { list-style:none;padding:0;margin:0;display:flex;flex-direction:column;gap:8px;font-size:14px;color:var(--muted) }
  .info-item { display:flex;gap:10px;align-items:flex-start }
  .chip { background: #fff; border-radius:8px; padding:8px 10px; font-weight:600; color:var(--eco-green); box-shadow: 0 6px 14px rgba(15,169,88,0.04) }

  /* input area */
  .chat-input-wrap {
    display:flex;
    gap:10px;
    padding:14px 18px;
    border-top:1px solid rgba(0,0,0,0.04);
    background: linear-gradient(180deg, rgba(255,255,255,0.97), rgba(255,255,255,0.95));
    align-items:center;
  }
  .chat-input {
    flex:1;
    padding:12px 14px;
    border-radius:12px;
    border:1px solid #e6efe8;
    outline:none;
    font-size:15px;
  }
  .chat-input:focus { box-shadow:0 6px 18px rgba(15,169,88,0.08); border-color:var(--eco-green-soft) }

  .btn-send {
    background: var(--eco-green);
    color:#fff;
    border:none;
    padding:10px 14px;
    border-radius:10px;
    cursor:pointer;
    font-weight:700;
  }
  .btn-send:active{ transform:translateY(1px) }

  /* responsive */
  @media (max-width: 900px){
    .chat-card{ grid-template-columns: 1fr; max-width: 98%; }
    .info-panel{ order: 3; border-left: none; border-top:1px solid rgba(0,0,0,0.04) }
  }
</style>

<div class="chat-wrapper">
  <div class="chat-card">

    <!-- CHAT AREA -->
    <div class="chat-area">
      <div class="chat-header">
        <div class="avatar">EB</div>
        <div>
          <h3>EcoBot AI Assistant</h3>
          <p>Chatbot keren milik EcoSort</p>
        </div>
      </div>

      <div id="chat-container" aria-live="polite" role="log">
        <!-- messages will be injected here -->
        <div class="msg bot" id="welcome">
          <div class="avatar-sm">🤖</div>
          <div class="bubble">Halo! 👋 Aku EcoBot. Tanyakan tentang cara memilah sampah atau jenis sampah yang ingin kamu ketahui.</div>
        </div>
      </div>

      <div id="typingIndicator" style="display:none; padding-left:6px;">
        <div class="typing">
          <div class="dot"></div><div class="dot"></div><div class="dot"></div>
          <div style="margin-left:8px;color:var(--muted);font-size:13px">EcoSort AI sedang mengetik...</div>
        </div>
      </div>

      <div class="chat-input-wrap">
        <input id="userMessage" class="chat-input" placeholder="Contoh: 'Botol plastik masuk kategori apa?'" autocomplete="off" />
        <button class="btn-send" id="sendBtn">Kirim</button>
      </div>
    </div>

    <!-- INFO PANEL -->
    <aside class="info-panel">
      <h4>Petunjuk Cepat</h4>
      <ul class="info-list">
        <li class="info-item"><div class="chip">1</div> Ketik pertanyaan singkat tentang sampah.</li>
        <li class="info-item"><div class="chip">2</div> Contoh: "Kaleng minuman itu logam?"</li>
        <li class="info-item"><div class="chip">3</div> Tersedia deteksi: Plastik, Kertas, Logam.</li>
      </ul>

      <hr style="margin:12px 0; border:none; border-top:1px solid rgba(0,0,0,0.04)" />

      <h4>Group 5</h4>
      <p style="color:var(--muted);font-size:13px">Inkubasi Project - SMK Telkom Sidoarjo</p>
      <div style="margin-top:10px">
        <button onclick="openGuide()" style="background:transparent;border:1px solid var(--eco-green-soft);padding:8px 12px;border-radius:8px;color:var(--eco-green);font-weight:700">Panduan Singkat</button>
      </div>
    </aside>
  </div>
</div>

<script>
  // Helper: create element safely
  function createMessageElement({ who = 'bot', text = '', time = null }) {
    const wrapper = document.createElement('div');
    wrapper.className = 'msg ' + (who === 'user' ? 'user' : 'bot');

    const avatar = document.createElement('div');
    avatar.className = 'avatar-sm';
    avatar.textContent = who === 'user' ? 'K' : '🤖';

    const bubble = document.createElement('div');
    bubble.className = 'bubble';
    bubble.innerHTML = text;

    wrapper.appendChild(avatar);
    wrapper.appendChild(bubble);

    return wrapper;
  }

  // Elements
  const chatContainer = document.getElementById('chat-container');
  const userInput = document.getElementById('userMessage');
  const sendBtn = document.getElementById('sendBtn');
  const typingIndicator = document.getElementById('typingIndicator');

  function scrollToBottom() {
    chatContainer.scrollTop = chatContainer.scrollHeight;
  }

  function showTyping(show = true) {
    typingIndicator.style.display = show ? 'block' : 'none';
  }

  async function handleSend() {
    const text = userInput.value.trim();
    if (!text) return;

    // User message
    const userEl = createMessageElement({ who: 'user', text });
    chatContainer.appendChild(userEl);
    scrollToBottom();
    userInput.value = '';

    showTyping(true);

    try {
      // 🔥 FIXED: route harus /chatbot (bukan /chat)
      const res = await fetch('/chatbot', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json',
          'Accept': 'application/json',
          'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.getAttribute('content') || ''
        },
        body: JSON.stringify({ message: text })
      });

      if (!res.ok) {
        throw new Error('Network error');
      }

      const json = await res.json();
      const botResponse = json.reply ?? "Maaf, aku tidak bisa menjawab pertanyaan itu.";


      // Bot reply
      const botEl = createMessageElement({ who: 'bot', text: botResponse });
      chatContainer.appendChild(botEl);
      scrollToBottom();

    } catch (err) {
      const errorEl = createMessageElement({ who: 'bot', text: "Terjadi kesalahan jaringan. Coba beberapa saat lagi." });
      chatContainer.appendChild(errorEl);
      scrollToBottom();
      console.error(err);
    } finally {
      showTyping(false);
    }
  }

  sendBtn.addEventListener('click', handleSend);

  userInput.addEventListener('keydown', function(e){
    if (e.key === 'Enter' && !e.shiftKey) {
      e.preventDefault();
      handleSend();
    }
  });

  function openGuide() {
    alert('Contoh: "Botol plastik masuk kategori apa?"\nEcoSort mendeteksi Plastik, Kertas, Logam.');
  }

  scrollToBottom();
</script>
@endsection