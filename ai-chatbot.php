<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0"> <!-- Google Fonts Link for Icons -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap');
        * {
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }


        @keyframes popInOut {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.1); } 
        }
        @keyframes popEffect {
            0% { transform: scale(1); }
            50% { transform: scale(1.1); }
            100% { transform: scale(1); }
        }
        .chatbot-toggler {
            overflow: auto;
            position: fixed;
            left: 75px;
            bottom: 75px;
            height: 70px;
            width: 70px;
            border: none;
            display: flex;
            align-items: center;
            justify-content: center;
            outline: none;
            cursor: pointer;
            background:rgb(255, 255, 255);
            border-radius: 50%;
            transition: all 0.2s ease;
            z-index: 2;
            border: 4px solid rgb(0, 0, 0);
            padding: 0;
            animation: popEffect 1.5s infinite ease-in-out;
        }
        .chatbot-toggler img.toggler-img {
            width: 40px; 
            height: 40px;
            object-fit: contain;
            transition: transform 0.2s ease;
        }
        .show-chatbot .chatbot-toggler {
            transform: rotate(90deg);
        }
        .show-chatbot .toggler-img {
            transform: rotate(180deg); 
        }
        @keyframes tooltipEffect {
            0%, 100% { opacity: 0; }
            50% { opacity: 1; }
        }
        .chatbot-description {
            animation: tooltipEffect 5s infinite;
        }
.chatbot {
    position: fixed;
    left: 70px;
    bottom: 50px;
    width: 440px;
    max-height: 740px;
    height: 740px;
    transform: scale(0.5);
    opacity: 0;
    pointer-events: none;
    background: #fff;
    border-radius: 15px;
    transform-origin: bottom left;
    box-shadow: 0 0 128px 0 rgba(0,0,0,0.1),
                0 32px 64px -48px rgba(0,0,0,0.5);
    transition: all 0.1s ease;
    z-index: 3;
    border: 4px solid rgb(25, 0, 255);
    animation: compatibleGlow 3.5s ease-in-out infinite;
}

@keyframes compatibleGlow {
    0%, 100% {
        box-shadow: 
            0 0 128px 0 rgba(0,0,0,0.1),
            0 32px 64px -48px rgba(0,0,0,0.5),
            0 0 20px rgb(100, 100, 100);
    }
    50% {
        box-shadow: 
            0 0 128px 0 rgba(0,0,0,0.1),
            0 32px 64px -48px rgba(0,0,0,0.5),
            0 0 40px rgb(255, 255, 255),
            0 0 60px rgba(25, 0, 255, 0.3);
    }
}

        .chatbot-description {
            position: fixed;
            left: 35px;
            bottom: 130px;
            transform: translateX(50%);
            background: rgba(0, 0, 0, 0.8);
            color: #fff;
            padding: 8px 12px;
            border-radius: 6px;
            font-size: 14px;
            white-space: nowrap;
            opacity: 0;
            transition: opacity 0.5s ease-in-out;
            z-index: 1;
        }
        .show-chatbot .chatbot{
            transform: scale(1);
            opacity: 1;
            pointer-events: auto;
        }
        .chatbot header{
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;

            color: white;
            background:rgb(0, 0, 0);
            padding: 14px;
            text-align: center;
            display: flex;
            height: 90px;
        }
        .chatbot header h2 {
            color: #FFFFFF;
            font-size: 1.4rem;
        }
        .chatbot header span {
            position: absolute;
            right: 30px;
            top: 6%;
            color: #FFFFFF;
            cursor: pointer;
            display: block;
            transform: translateY(-50%);
        }
        .header-text-wrapper {
            display: flex;
            flex-direction: column;
            justify-content: center; 
        }
        .header-text {
            font-size: 15px; 
            font-weight: bold;
            color: white;
            margin: 0; 
        }
        .header-text2 {
            font-size: 30px; 
            font-weight: bold;
            color: white;
            margin: 0; 
            margin-left: 25px;
            text-align: left;
        }
        .header::after {
            content: '';
            position: absolute;
            bottom: -20px; 
            left: 0;
            width: 100%;
            height: 40px; 
            background: #4CC9FE; 
            border-radius: 50% 50% 0 0;
        }
        .chatbot .chatbox {
            height: 610px;
            overflow-y: auto;
            padding: 30px 20px 100px;
        }
        .chatbot .chat {
            display: flex;
        }
        .chatbot .incoming span{
            height: 32px;
            width: 32px;
            color: #fff;
            align-self: flex-end;
            background: #4CC9FE;
            text-align:center;
            line-height: 32px;
            border-radius: 4px;
            margin: 0 10px 0;
        }
        .chatbot .outgoing {
            margin: 20px 0;
            justify-content: flex-end;
            position: relative;
        }
        .chatbot .outgoing p {
            margin-top: 30px;
            font-weight: bold;
            position: relative;
            color: black;
            max-width: 75%;
            font-size: 0.95rem;
            white-space: pre-wrap;
            background: #4CC9FE;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .chatbot .outgoing p::before {
            content: "";
            position: absolute;
            top: 0;
            right: -10px;
            width: 0;
            height: 0;
            border-bottom: 10px solid transparent;
            border-left: 10px solid #4CC9FE;
        }
        .chatbot .chat p {
            max-width: 75%;
            font-size: 0.95rem;
            white-space: pre-wrap;
            padding: 12px 16px;
            border-radius: 10px 0 10px 10px;
            background: linear-gradient(to right, #4CC9FE, #12D8FA,  #4CC9FE, #12D8FA);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .chatbot .chat p.error {
        color: #721c24;
            background: #f8d7da;
        }
        .chatbot .incoming p {
            color: white;
            margin-top: 10px;
            position: relative;
            color: #000;
            background:rgb(255, 255, 255);
            border: 1px solid black;
            border-radius: 0 10px 10px 10px;
            width: 360px;
            padding: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .chatbot .incoming p::before {
            content: "";
            position: absolute;
            top: -1px;
            left: -10px;
            width: 0;
            height: 0;
            border-bottom: 10px solid transparent;
            border-right: 10px solid rgb(0, 0, 0);
        }
        .chatbot .chat-input{
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
            position: absolute;
            bottom: 0;
            width: 100%;
            display: flex;
            gap: 5px;
            background: #fff;
            align-items: flex-end;
            padding: 5px 20px;
            border-top: 1px solid #ccc;
        } 
        .chat-input textarea {
            height: 55px;
            width: 100%;
            max-height: 180px;
            overflow: hidden;
            border: none;
            outline: none;
            font-size: 0.95rem;
            resize: none;
            padding: 16px 15px 16px 0;
        }
        .chat-input span{
            align-self: flex-end;
            height: 55px;
            line-height: 55px;
            color:rgba(58, 0, 231, 0.9);
            font-size: 1.35em;
            cursor: pointer;
            visibility: hidden;
        }
        .chat-input textarea:valid ~ span{
            visibility: visible;
        }
        .chat .dialog-options {
            display: flex;
            gap: 5px;
            padding: 5px;
            background: #fff;
            flex-wrap: wrap;
            justify-content: center;
            bottom: 0;
            width: 100%;
        }
        .chat .dialog-options button {
            font-weight: bold;
            color: black;
            background: linear-gradient(to left, #4CC9FE, #12D8FA,  #4CC9FE, #12D8FA);
            border-radius: 25px;
            padding: 8px 12px;
            cursor: pointer;
        }
        .chat .dialog-options button:hover {
            background: rgb(118, 191, 223);
        }
        .chat-icon{
            min-width: 40px; 
            display: flex;
            justify-content: center;
        }
        .chat-icon img {
            width: 30px;
            height: 30px; 
            margin-left: -10px;
            object-fit: contain;
        }
        .header-icon-wrapper {
            width: 60px; 
            height: 60px;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: white; 
            border: 2px solid rgb(255, 255, 255); 
            border-radius: 50%;
        }
        .header-icon {
            width: 50px;
            height: 50px;
            object-fit: cover;
        }
        .chatbot header .minimize-btn {
            margin: 0;
            right: 70px; 
            top: 20px;
        }
        .minimize-btn:hover {
            color: #ff9800;
        }
        .chatbot header .close-btn {
            top: 27px;
            margin-left: 10px;
            font-family: 'Material Symbols Outlined', sans-serif;
            font-size: 24px;
            cursor: pointer;
            transition: color 0.3s ease, transform 0.2s ease;
            padding: 5px;
            border-radius: 50%;
        }
        .send-btn {
            font-size: 55;
        }
        .close-btn:hover {
            color: #ff3b30; 
        }
        .close-btn:active {
            color: #d32f2f; 
        }
        
 @keyframes scroll_4013 {
    0% {
        transform: translateY(40%);
    }
    50% {
        transform: translateY(90%);
    }
    100% {
        transform: translateY(40%);
    }
}
        .element {
            animation: scroll_4013 3s ease-in-out infinite;
        }
        .chatbox::-webkit-scrollbar {
            width: 5px; 
            height: 10px; 
        }
        .chatbox::-webkit-scrollbar-thumb {
            background-color: rgb(60, 62, 77); 
            border-radius: 10px; 
            box-shadow: 0px 0px 10px rgb(43, 45, 54); 
        }
        .chatbox::-webkit-scrollbar-thumb:hover {
            background-color: rgb(51, 52, 56); 
        }
        .chatbox::-webkit-scrollbar-track {
            background-color: rgba(105, 127, 255, 0.2); 
            border-radius: 10px; 
        }
        .chatbox::-webkit-scrollbar-track-piece {
            background-color: transparent; 
        }
        .custom-shape-divider-bottom-1743647769 {
            position: absolute;
            display: block;
            left: 0;
            width: 100%;
            overflow: hidden;
            z-index: 999;
        }
        .custom-shape-divider-bottom-1743647769 svg {
            position: relative;
            display: block;
            width: calc(179% + 1.3px);
            height: 30px;
            transform: rotateY(180deg);
            z-index: 999;
        }
        .custom-shape-divider-bottom-1743647769 .shape-fill {
            fill:rgb(0, 0, 0) ; 
            z-index: 999;
        }
        .green-dot {
        display: inline-block;
        width: 10px;
        height: 10px;
        background-color:rgb(0, 255, 64);
        border-radius: 50%;
        margin-right: 337px;
        margin-top: 25px;
        vertical-align: middle;
        }
        #send-btn {
        font-size: 32px;
        }

        .chatbot.minimized {
            height: 0;
    overflow: hidden;
    opacity: 0;
    transform: scaleX(0);
    transform-origin: right left;
    transition: all 0.3s ease;
        }
        /* From Uiverse.io by Zain-Muhammad */ 
.tooltip-wrapper {
    margin-right: 385px;
    margin-top: -70px;
  --clr-btn: #000000;;
  --clr-dropdown: rgb(2 22 36);
  --clr-nav-hover: rgb(2 22 36);
  --clr-dropdown-hov: rgb(2 22 36);
  --clr-dropdown-link-hov: rgb(2 22 36);
  --clr-light: #ffffff;
}
.nav-link {
  position: relative;
}
.tooltip-wrapper > .tooltip-container {
  display: flex;
  justify-content: space-around;
  align-items: center;
}
.tooltip-container,
.tooltip-menu-with-icon {
  list-style: none;
}
.nav-link > .tooltip-tab {
  color: var(--clr-light);
  background: var(--clr-btn);
  padding: 0.5rem 0.5rem;
  letter-spacing: 1px;
  font-size: 0.75rem;
  display: flex;
  align-items: center;
  column-gap: 12px;
  justify-content: space-between;
  text-transform: uppercase;
  cursor: pointer;
  border: 1px solid #00c1d5;
  transition: 0.3s ease-in-out;
}
.nav-link > .tooltip-tab:hover svg {
  transform: rotate(360deg);
  transition: 0.3s ease-in-out;
}
.tooltip-links {
  text-decoration: none;
}
.nav-link svg {
  fill: #fff;
}
.tooltip {
  position: absolute;
  bottom: 100%;
  left: 0;
  min-width: 12rem;
  max-width: 15rem;
  transform: translateY(-10px);
  opacity: 0;
  pointer-events: none;
  transition: 0.5s;
  padding: 0px 0px 15px 0px;
}

.tooltip::after {
  content: "";
  width: 15px;
  height: 15px;
  background: #00c1d5 no-repeat -30px -50px fixed;
  bottom: 0;
  left: 6%;
  position: absolute;
  display: inline-block;
  clip-path: polygon(50% 100%, 0% 0%, 100% 0%);
  transform: rotate(180deg);
  z-index: -1;
  box-shadow: 0px -6px 30px rgb(2 22 36); 
}

.tooltip .tooltip-menu-with-icon {
  padding: 10px 0px;
  background-color: var(--clr-dropdown);
  border: 1px solid #00c1d5;
  position: relative;
}
.tooltip-link {
  position: relative;
}
.tooltip-link:not(:nth-last-child(2)) {
  border-bottom: 1px solid var(--clr-dropdown);
}
.tooltip-link > a {
  display: flex;
  align-items: center;
  justify-content: flex-start;
  column-gap: 10px;
  background-color: var(--clr-dropdown);
  color: var(--clr-light);
  padding: 0.5rem 1rem;
  font-size: 0.75rem;
  transition: 0.3s;
}
.tooltip-menu-with-icon svg {
  height: 20px;
  margin-left: 0px;
}
.nav-link:hover > .tooltip-tab {
  transform: scale(1.1);
}
.nav-link:hover > .tooltip,
.tooltip-link:hover > .tooltip {
  transform: translate(0, 0);
  opacity: 1;
  pointer-events: auto;
  -webkit-transform: translate(0, 0);
  -moz-transform: translate(0, 0);
  -ms-transform: translate(0, 0);
  -o-transform: translate(0, 0);
}
.nav-link:hover > .tooltip-tab {
  transform: scale(1);
  background-color: var(--clr-nav-hover);
}

    </style>
</head>

<body>

    <div class="chatbot-description">AI powered chatbot!</div>

        <button class="chatbot-toggler">
            <img class="toggler-img" src="pics/KJ.png" alt="Chatbot Toggler">
        </button>

        <ul class="chatbot">
            <header>
                <div class="header-icon-wrapper">
                    <img class="header-icon" src="pics/KJ.png" alt="Header Icon">
                </div>

                <div class="header-text-wrapper">
                <p class="header-text2">KJ CHATBOT</p>
                    <p class="header-text" style="margin-left:40px;">AI Generative Chatbot Project</p>
                    <p class="header-text"><em>Gemini Powered Chatbot</em></p>
                    <span class="green-dot"></span>
               
                </div>
                
                <span class="close-btn material-symbols-outlined">close</span>

                <span class="minimize-btn material-symbols-outlined">minimize</span>
            
            </header>
            <div class="custom-shape-divider-bottom-1743647769">
                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                    <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" class="shape-fill"></path>
                    <path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5" class="shape-fill"></path>
                    <path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" class="shape-fill"></path>
                </svg>
            </div>
            <ul div class="chatbox">        
        </ul>
        
<div> <!-- From Uiverse.io by Zain-Muhammad --> 
<div class="tooltip-wrapper">
  <ul class="tooltip-container">
    <li style="--i: 1.1s" class="nav-link">
      <div class="tooltip-tab">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          style="fill:black;"
          fill="none"
          viewBox="0 0 16 16"
          height="16"
          width="16"
        >
          <path
            stroke-linejoin="round"
            stroke-linecap="round"
            stroke="#ffffff"
            d="M1 10V8C1 2.5 6 1 8 1C10 1 15 2.5 15 8V10M1 10C1 10.5552 1 11.1543 1.0984 11.6204C1.24447 12.3122 2 13 3 13C4 13 4.75553 12.3122 4.9016 11.6204C5 11.1543 5 10.5552 5 10C5 9.44485 5 8.84565 4.9016 8.37961C4.75553 7.68776 4 7 3 7C2 7 1.24447 7.68776 1.0984 8.37961C1 8.84565 1 9.44485 1 10ZM15 10C15 10.5552 15 11.1543 14.9016 11.6204C14.7555 12.3122 14 13 13 13C12 13 11.2445 12.3122 11.0984 11.6204C11 11.1543 11 10.5552 11 10C11 9.44485 11 8.84565 11.0984 8.37961C11.2445 7.68776 12 7 13 7C14 7 14.7555 7.68776 14.9016 8.37961C15 8.84565 15 9.44485 15 10ZM15 10C15 15.5 12.5 15 8 15"
          ></path>
        </svg>
      </div>
      <div class="tooltip">
        <ul class="tooltip-menu-with-icon">
          <li class="tooltip-link">
            <a class="tooltip-links" href="#"> <!-- editable link default phone number-->
              <svg
                aria-hidden="true"
                role="img"
                height="16"
                width="16"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="m4.6.7 1.6 1.7c.6.6.7 1.6 0 2.2C5 6.1 5 6.4 7.2 8.7c2.4 2.4 2.7 2.4 4.2 1 .6-.5 1.6-.5 2.2 0l1.7 1.7v.1c.6.5.6 1.5 0 2.1v.1c-1.4 1.4-2.5 2-3.8 2h-.7c-1.6-.3-3.4-1.6-6.1-4.4C-.5 6.1-1 4 2.3.7 2.9.1 3.9.1 4.6.7m-1.2.4c-.2 0-.4.1-.5.3C.1 4 .5 5.9 5.3 10.7s6.6 5.2 9.3 2.4l.2.1-.2-.1c.3-.3.3-.7.1-1L13 10.4a.7.7 0 0 0-1 0c-1.9 1.8-2.7 1.6-5.3-1C4 6.6 3.8 5.8 5.6 4c.3-.3.3-.7 0-1L3.9 1.3a.7.7 0 0 0-.5-.2"
                  fill-rule="evenodd"
                  fill="#FFF"
                ></path>
              </svg>
              +639-610-578-094
            </a>
          </li>
          <!-- <li class="tooltip-link">   ///editable time
            <a class="tooltip-links" href="#"> 
              <svg
                aria-hidden="true"
                role="img"
                viewBox="0 0 13.971 13.971"
                height="16"
                width="16"
                xmlns="http://www.w3.org/2000/svg"
              >
                <defs></defs>
                <g id="support-clock_svg__clock">
                  <path
                    class="support-clock_svg__support-clock-cls-1"
                    d="M6.985 13.97a6.985 6.985 0 1 1 6.986-6.985 6.993 6.993 0 0 1-6.986 6.986zm0-13.47a6.485 6.485 0 1 0 6.486 6.485A6.493 6.493 0 0 0 6.985.5"
                  ></path>
                  <path
                    class="support-clock_svg__support-clock-cls-1"
                    d="M11.1 7.235H6.986a.25.25 0 0 1-.25-.25V1.972a.25.25 0 1 1 .5 0v4.763h3.866a.25.25 0 0 1 0 .5z"
                  ></path>
                </g>
              </svg>
              8:00AM - 5PM 
            </a>
          </li> -->
          <li class="tooltip-link">
            <a class="tooltip-links" href="https://mail.google.com/mail/?view=cm&fs=1&to=test@gmail.com" target="_blank">  <!-- send email to test@gmail.com -->
              <svg
                aria-hidden="true"
                role="img"
                viewBox="0 0 18.2 13.342"
                height="16"
                width="16"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  style="fill:#fff"
                  d="M17.9 0H.3a.3.3 0 0 0-.3.3v12.742a.3.3 0 0 0 .3.3h17.6a.3.3 0 0 0 .3-.3V.3a.3.3 0 0 0-.3-.3M.85.5h16.554L9.101 6.364Zm6.983 5.576 1.124.799a.25.25 0 0 0 .29 0l1.527-1.08-.133.13 6.719 6.917H.956ZM.5 12.59V.867l6.918 4.915Zm10.533-6.978L17.7.902v11.574ZM.539.5.5.554V.5Z"
                ></path>
              </svg>
              karljasper1231@gmail.com
            </a>
          </li>
        </ul>
      </div>
    </li>
  </ul>
</div> </div>
        
        <div class="chat-input">
            <textarea placeholder="Enter a message..." required></textarea>
            <span id="send-btn" class="material-symbols-outlined">send</span>
            

    </div>
    <div class="dialog-options" style="display: none; height: 0%; overflow: hidden;"></div>

</body>


<script>
    const chatInput = document.querySelector(".chat-input textarea");
    const sendChatBtn = document.querySelector(".chat-input span");
    const chatbox = document.querySelector('.chatbox');
    const dialogOptions = document.querySelector('.dialog-options');
    const chatbotToggler = document.querySelector(".chatbot-toggler");
    const chatbotCloseBtn = document.querySelector(".close-btn");
    const chatTextarea = document.querySelector(".chat-input textarea");
    const minimizeBtn = document.querySelector('.minimize-btn');
    const chatbot = document.querySelector('.chatbot');

    let userMessage;
    let isMinimized = false;
    let hasShownIntro = false; // Track if introduction has been shown
    const API_KEY = "AIzaSyBQUJNwAfZa_hYqHd92MdsmSE92G1A78pM";
    const inputInitHeight = chatInput.scrollHeight;

    const createChatLi = (message, className) => {
        // Create a chat <li> element with passed message and className
        const chatLi = document.createElement("li");
        chatLi.classList.add("chat", className);

        let chatContent = "";

        if (className === "outgoing") {
            chatContent = `<p>${message}</p>`;
        } else {
            chatContent = `
                <div class="chat-icon">
                    <img src="pics/KJ.png" alt="Chat Icon" class="chat-icon-img">
                </div>
                <div class="chat-text">
                    <p>${message}</p>
                </div>
            `;
        }

        chatLi.innerHTML = chatContent;
        return chatLi;
    };

    const showIntroduction = () => {
        const introMessage = "Hello there! This is chatbot is AI generated.";
        const introChatLi = createChatLi(introMessage, "incoming");
        chatbox.appendChild(introChatLi);

        const secondMessage = "Where I'm using GEMINI as the API to generate the AI chats";
        const secondChatLi = createChatLi(secondMessage, "incoming");
        chatbox.appendChild(secondChatLi);

        chatbox.scrollTo(0, chatbox.scrollHeight);
        hasShownIntro = true;
    };

    const generateResponse = (incomingChatLi) => {
        const API_URL = `https://generativelanguage.googleapis.com/v1beta/models/gemini-2.0-flash:generateContent?key=${API_KEY}`
        const messageElement = incomingChatLi.querySelector("p");
        
        const requestOptions = {
            method: "POST",
            headers: { "Content-Type": "application/json" },
            body: JSON.stringify({ 
              contents: [{ 
                role: "user", 
                parts: [{ text: userMessage }] 
              }] 
            }),
          };
          
          //Send POST request to API, get  response
          fetch(API_URL, requestOptions).then(res => res.json()).then(data => {
            messageElement.textContent = data.candidates[0].content.parts[0].text; // Update message text with API response
        }).catch((error) => {
            messageElement.textContent = "Oops! Something went wrong. Please try again.";
        }).finally(() => chatbox.scrollTo(0, chatbox.scrollHeight));  //auto scroll chat
      }
     
      const handleChat = () => {
        userMessage = chatInput.value.trim();
        if(!userMessage) return;
        chatInput.value = "";
        chatInput.style.height = `${inputInitHeight}px`;

        //Append the user's message to the chatbox
        chatbox.appendChild(createChatLi(userMessage, "outgoing"));
        chatbox.scrollTo(0, chatbox.scrollHeight);        //auto scroll chat

        setTimeout(() => {
            //Display "Thinking..." message while waiting for the response
            const incomingChatLi = createChatLi("Thinking...", "incoming");
            chatbox.appendChild(incomingChatLi);
            chatbox.scrollTo(0, chatbox.scrollHeight);     //auto scroll chat
            chatbox.offsetHeight; // Trigger reflow
            generateResponse(incomingChatLi);
        }, 600);
    }

    chatInput.addEventListener("input", () => {
      //Adjust the height of the input textarea based on its content
      chatInput.style.height = `${inputInitHeight}px`;
      chatInput.style.height = `${chatInput.scrollHeight}px`;
    });

    chatInput.addEventListener("keydown", (e) => {
      // If Enter key is pressed without Shift key and the window
      // width is greater than 800px, handle the chat
      if(e.key === "Enter" && !e.shiftKey && window.innerWidth > 800){
        e.preventDefault();
        handleChat();
      }
    })

    sendChatBtn.addEventListener("click", handleChat);

    // Updated toggler function to handle minimized state properly and show introduction
    chatbotToggler.addEventListener("click", () => {
        if (!document.body.classList.contains("show-chatbot")) {
            document.body.classList.add("show-chatbot");
            
            if (isMinimized) {
                // Restore from minimized state
                chatbot.classList.remove("minimized");
                isMinimized = false;
            } else {
                // New chatbot session - clear previous content and show introduction
                chatbot.classList.remove("minimized");
                isMinimized = false;
                chatbox.innerHTML = "";
                dialogOptions.innerHTML = "";
                
                // Show introduction after a short delay for better UX
                setTimeout(() => {
                    if (!hasShownIntro) {
                        showIntroduction();
                    }
                }, 300);
            }
        }
    });

    chatbotCloseBtn.addEventListener("click", () => {//CLOSE FUNCTION
        document.body.classList.remove("show-chatbot");
        chatbot.classList.remove("minimized");
        isMinimized = false;
        // Reset intro flag when closing so it shows again on next open
        hasShownIntro = false;
    });

    minimizeBtn.addEventListener("click", () => {
        chatbot.classList.add("minimized");
        document.body.classList.remove("show-chatbot"); // This will reset the toggler
        isMinimized = true;
    });
</script>

</script>
</html>




