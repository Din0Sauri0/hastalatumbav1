const msgerForm = get(".msger-inputarea");
const msgerInput = get(".msger-input");
const msgerChat = get(".msger-chat");
const BOT_IMG = "assets/img/bot.webp";
const PERSON_IMG = "assets/img/user.webp";
const BOT_NAME = "<img src=\"assets/img/robot.webp\" alt=\"Centro de AutoAyuda CETIF\" title=\"SEPULTURERO hastaltumba.cl\" srcset=\"\" width=\"40px\" height=\"40px\">SEPULTURERO";
const PERSON_NAME = "Visita <img src=\"assets/img/user.webp\" alt=\"Centro de AutoAyuda CETIF\" title=\"Centro de AutoAyuda CETIF\" srcset=\"\" width=\"40px\" height=\"40px\"> ";
const prompts = [
  ["hola"],
  ["quien eres", "como te llamas", "que haces", "quien eres tu"],
  ["que es hastalatumba", "que es esta cosa", "que es", "wea", "cosa", "que"],
]
const replies = [
   ["<strong>Hola,</strong> qué puedo hacer por tí?"],
  ["Hola soy el SEPULTURERO de hastalatumba.cl ¿Cómo te puedo ayudar?"],
  ["Es un lugar en donde nos puedes publicar el secreto que te llevarás a la tumba al mundo, nosotros nos encargaremos de hacerte un velorio y posterior  funeral a tu secreto para que le heches tierra !!"],
 
  
];
const alternative = [
  
  "No es una pegunta para mi o tu pregunta está fuera de contexto :/",
  "NO logro entender lo que quieres preguntar :(",
  "¿?",
]
const robot = ["Como te va?", "Soy un bot inteligente"];
msgerForm.addEventListener("submit", event => {
  event.preventDefault();
  const msgText = msgerInput.value;
  if (!msgText) return;
  msgerInput.value = "";
  addChat(PERSON_NAME, PERSON_IMG, "right", msgText);
  output(msgText);
});
function output(input) {
  let product;
  let text = input.toLowerCase().replace(/[^\w\s]/gi, "").replace(/[\d]/gi, "").trim();
  text = text
    .replace(/ a /g, " ")  
    .replace(/i feel /g, "")
    .replace(/whats/g, "what is")
    .replace(/please /g, "")
    .replace(/ please/g, "")
    .replace(/r u/g, "are you");
  if (compare(prompts, replies, text)) {
    product = compare(prompts, replies, text);
  } else if (text.match(/thank/gi)) {
    product = "You're welcome!"
  } else if (text.match(/(robot|bot|robo)/gi)) {
    product = robot[Math.floor(Math.random() * robot.length)];
  } else {
    product = alternative[Math.floor(Math.random() * alternative.length)];
  }
  const delay = input.split(" ").length * 100;
  setTimeout(() => {
    addChat(BOT_NAME, BOT_IMG, "left", product);
  }, delay);
}
function compare(promptsArray, repliesArray, string) {
  let reply;
  let replyFound = false;
  for (let x = 0; x < promptsArray.length; x++) {
    for (let y = 0; y < promptsArray[x].length; y++) {
      if (promptsArray[x][y] === string) {
        let replies = repliesArray[x];
        reply = replies[Math.floor(Math.random() * replies.length)];
        replyFound = true;
        break;
      }
    }
    if (replyFound) {
      break;
    }
  }
  return reply;
}
function addChat(name, img, side, text) {
  const msgHTML = `
    <div class="msg ${side}-msg">
      
      <div class="msg-bubble">
        <div class="msg-info">
          <div class="msg-info-name">${name}</div>
          <div class="msg-info-time">${formatDate(new Date())}</div>
        </div>
        <div class="msg-text">${text}</div>
      </div>
    </div>
  `;
  msgerChat.insertAdjacentHTML("beforeend", msgHTML);
  msgerChat.scrollTop += 500;
}
function get(selector, root = document) {
  return root.querySelector(selector);
}
function formatDate(date) {
  const h = "0" + date.getHours();
  const m = "0" + date.getMinutes();
  return `${h.slice(-2)}:${m.slice(-2)}`;
}
function random(min, max) {
  return Math.floor(Math.random() * (max - min) + min);
}


/*GURDAR TEXTO */
function guardarTexto() {
  var texto = document.getElementById("texto").value;
  
  // Envía el texto al archivo PHP para que lo guarde
  fetch('guardar_texto.php', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/x-www-form-urlencoded'
    },
    body: 'texto=' + encodeURIComponent(texto)
  })
  .then(function(response) {
    // Hacer algo con la respuesta del servidor, si es necesario
  });
}

document.getElementById("texto").addEventListener("click", function() {
  this.placeholder = "";
});



