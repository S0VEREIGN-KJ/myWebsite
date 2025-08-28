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
            right: 75px;
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
    right: 70px;
    bottom: 50px;
    width: 440px;
    max-height: 740px;
    height: 740px;
    transform: scale(0.5);
    opacity: 0;
    pointer-events: none;
    background: #fff;
    border-radius: 15px;
    transform-origin: bottom right;
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
            right: 130px;
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
            z-index: 3;
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
            background: linear-gradient(to right, #4CC9FE, #12D8FA,  #4CC9FE, #12D8FA);
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
            pointer-events: auto ;
            cursor: pointer;
            transition: color 0.3s ease, transform 0.2s ease;
            padding: 5px;
            border-radius: 50%;
            z-index: 9999;
            position: absolute
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
    transform-origin: left right;
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

    <div class="chatbot-description">Click me!</div>

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
                    <p class="header-text" style="margin-left:40px;">A Rule-Based-Chatbot Project</p>
                    <span class="green-dot"></span>
               
                </div>
                
                <span class="close-btn material-symbols-outlined" style="z-index:99999999;">close</span>

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

let isMinimized = false;
const inputInitHeight = chatInput ? chatInput.scrollHeight : 55; // Add this missing variable

const createChatLi = (message, className) => {
    //Create a chat <li> element with passed message and className
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
}

const dialogFlow = {
    start: {
        message: "Hi! I'm your personal assistant here to help you learn more about me and my work. What would you like to know?",
        options: [
            { label: "About Me", next: "about" },
            { label: "My Skills & Expertise", next: "skills" },
            { label: "View My Projects", next: "projects" },
            { label: "Services I Offer", next: "services" },
            { label: "My Certificates", next: "certificates" }
        ]
    },
    
    about: {
        message: "I'm a passionate technology enthusiast with 2+ years of experience exploring the ever-evolving world of tech. I love learning new tools, programming languages, and solving real-world problems through software development.",
        options: [
            { label: "What are your main skills?", next: "skills" },
            { label: "Show me your experience", next: "experience" },
            { label: "What drives you?", next: "passion" },
            { label: "Back to main menu", next: "start" }
        ]
    },

    passion: {
        message: "I'm deeply passionate about exploring technology and constantly learning new things. Education empowers me to solve real-world problems, innovate through software development, and stay ahead in our dynamic digital landscape. Technology is an ever-evolving field where learning never stops!",
        options: [
            { label: "Tell me about your projects", next: "projects" },
            { label: "What services do you offer?", next: "services" },
            { label: "Back to main menu", next: "start" }
        ]
    },

    experience: {
        message: "I have 2 years of hands-on experience in technology, with certifications including National Certificate II in Computer System Servicing and Microsoft Office Productivity Tools. I've also participated in startup competitions and tech bootcamps.",
        options: [
            { label: "View my certificates", next: "certificates" },
            { label: "See my technical skills", next: "skills" },
            { label: "Back to main menu", next: "start" }
        ]
    },

    skills: {
        message: "Here are my current skill levels: HTML, CSS, JavaScript, PHP , Adobe Photoshop , Adobe Premiere. I'm also certified in Computer System Servicing and Microsoft Office Tools.",
        options: [
            { label: "Web Development Skills", next: "web_skills" },
            { label: "Design & Multimedia", next: "design_skills" },
            { label: "Certifications", next: "tech_certifications" },
            { label: "Back to main menu", next: "start" }
        ]
    },

    web_skills: {
        message: "My web development expertise includes HTML, CSS, JavaScript, and PHP. I'm continuously learning and improving these skills through hands-on projects and staying updated with modern web technologies.",
        options: [
            { label: "See my web projects", next: "web_projects" },
            { label: "Other technical skills", next: "design_skills" },
            { label: "Back to skills", next: "skills" }
        ]
    },

    design_skills: {
        message: "I have strong design and multimedia skills with Adobe Photoshop (57%) and Adobe Premiere (52%). I use these tools for photo editing, graphic design, video editing, and creating engaging visual content.",
        options: [
            { label: "View design services", next: "design_services" },
            { label: "Web development skills", next: "web_skills" },
            { label: "Back to skills", next: "skills" }
        ]
    },

    tech_certifications: {
        message: "I hold a National Certificate II in Computer System Servicing (expired Oct 2024, eligible for renewal) and am certified in Microsoft Office Productivity Tools. I also have certifications in cybersecurity, cloud computing, and digital literacy.",
        options: [
            { label: "View all certificates", next: "certificates" },
            { label: "Back to skills", next: "skills" },
            { label: "Back to main menu", next: "start" }
        ]
    },

    projects: {
        message: "I've worked on several exciting projects including AI-powered chatbots, rule-based chatbots, and ticketing systems. Each project demonstrates different aspects of my technical abilities.",
        options: [
            { label: "AI-Powered Chatbot", next: "ai_chatbot" },
            { label: "Rule-Based Chatbot", next: "rule_chatbot" },
            { label: "Ticketing System", next: "ticketing_system" },
            { label: "Back to main menu", next: "start" }
        ]
    },

    web_projects: {
        message: "My web development projects showcase my skills in creating interactive applications. I've built chatbot systems and web-based ticketing platforms using HTML, CSS, JavaScript, and PHP.",
        options: [
            { label: "AI-Powered Chatbot", next: "ai_chatbot" },
            { label: "Ticketing System", next: "ticketing_system" },
            { label: "View all projects", next: "projects" },
            { label: "Back to main menu", next: "start" }
        ]
    },

    ai_chatbot: {
        message: "My AI-Powered Chatbot project demonstrates advanced conversational AI capabilities. It uses natural language processing to provide intelligent responses and can handle complex user interactions.",
        options: [
            { label: "See other projects", next: "projects" },
            { label: "Learn about my AI skills", next: "ai_skills" },
            { label: "Back to main menu", next: "start" }
        ]
    },

    rule_chatbot: {
        message: "The Rule-Based Chatbot is a structured conversational system that follows predefined dialog flows. It's perfect for customer service, FAQs, and guided conversations with consistent, reliable responses.",
        options: [
            { label: "AI-Powered Chatbot", next: "ai_chatbot" },
            { label: "View all projects", next: "projects" },
            { label: "Back to main menu", next: "start" }
        ]
    },

    ticketing_system: {
        message: "My Ticketing System is a comprehensive web application for managing support tickets, user requests, and workflow automation. It demonstrates my full-stack development capabilities.",
        options: [
            { label: "See chatbot projects", next: "ai_chatbot" },
            { label: "View all projects", next: "projects" },
            { label: "Back to main menu", next: "start" }
        ]
    },

    ai_skills: {
        message: "I'm passionate about AI and machine learning technologies. I've attended cybersecurity bootcamps, AI webinars, and worked on projects involving conversational AI and intelligent systems.",
        options: [
            { label: "View AI project", next: "ai_chatbot" },
            { label: "See my certifications", next: "certificates" },
            { label: "Back to main menu", next: "start" }
        ]
    },

    services: {
        message: "I offer professional services in three main areas: Video Editing using Adobe Premiere, Photo Editing with Adobe Photoshop, and Icon Design for digital platforms.",
        options: [
            { label: "Video Editing Services", next: "video_editing" },
            { label: "Photo Editing Services", next: "photo_editing" },
            { label: "Icon Design Services", next: "icon_design" },
            { label: "All Services Overview", next: "services_overview" }
        ]
    },

    design_services: {
        message: "My design services include professional photo editing with Adobe Photoshop, video editing with Adobe Premiere, and custom icon design. I create engaging visual content that meets your specific needs.",
        options: [
            { label: "Photo editing details", next: "photo_editing" },
            { label: "Video editing details", next: "video_editing" },
            { label: "Icon design details", next: "icon_design" },
            { label: "Back to main menu", next: "start" }
        ]
    },

    video_editing: {
        message: "I use Adobe Premiere to create engaging videos with professional editing techniques. My services include video cutting, transitions, effects, color correction, and audio synchronization for various platforms.",
        options: [
            { label: "Photo editing services", next: "photo_editing" },
            { label: "View other services", next: "services" },
            { label: "Contact information", next: "contact" }
        ]
    },

    photo_editing: {
        message: "With Adobe Photoshop, I enhance images and create compelling graphics. Services include photo retouching, background removal, color correction, composite images, and graphic design.",
        options: [
            { label: "Video editing services", next: "video_editing" },
            { label: "Icon design services", next: "icon_design" },
            { label: "Contact information", next: "contact" }
        ]
    },

    icon_design: {
        message: "I design clear and functional icons for digital platforms including websites, mobile apps, and software interfaces. My icons are modern, scalable, and optimized for various screen sizes.",
        options: [
            { label: "Photo editing services", next: "photo_editing" },
            { label: "View other services", next: "services" },
            { label: "Contact information", next: "contact" }
        ]
    },

    services_overview: {
        message: "My complete service portfolio: 🎬 Video Editing (Adobe Premiere) - Professional video production and editing, 🎨 Photo Editing (Adobe Photoshop) - Image enhancement and graphic design, 🔱 Icon Design - Custom digital icons and graphics.",
        options: [
            { label: "Get detailed service info", next: "services" },
            { label: "View my portfolio", next: "projects" },
            { label: "Contact me", next: "contact" }
        ]
    },

    certificates: {
        message: "I have extensive certifications including Microsoft Office Productivity Tools (2025), Cybersecurity certifications, Cloud Computing training, and National Certificate II in Computer System Servicing. I regularly attend tech webinars and bootcamps.",
        options: [
            { label: "Recent certifications (2024-2025)", next: "recent_certs" },
            { label: "Technical certifications", next: "tech_certs" },
            { label: "Competition & Events", next: "competitions" },
            { label: "Back to main menu", next: "start" }
        ]
    },

    recent_certs: {
        message: "My latest certifications include: Microsoft Office Productivity Tools (Jan 2025, 16 hrs), Cybersecurity Advocacy (Oct 2024, 8 hrs), and various webinars on AI, Cloud Computing, and Digital Literacy throughout 2024.",
        options: [
            { label: "View competitions", next: "competitions" },
            { label: "Technical certifications", next: "tech_certs" },
            { label: "Back to certificates", next: "certificates" }
        ]
    },

    tech_certs: {
        message: "Technical certifications include National Certificate II in Computer System Servicing, Cloud Computing, Edge Computing, Radio Access Network, and Cybersecurity Bootcamp. Each certification strengthens my technical expertise.",
        options: [
            { label: "Recent achievements", next: "recent_certs" },
            { label: "View my skills", next: "skills" },
            { label: "Back to certificates", next: "certificates" }
        ]
    },

    competitions: {
        message: "I've participated in startup competitions including Philippine Startup 9 Cordillera Pitching Competition and TARAKI MAKEATHON Startup Week Competition in 2024. I also facilitated digital citizenship training sessions.",
        options: [
            { label: "View my projects", next: "projects" },
            { label: "See other certifications", next: "certificates" },
            { label: "Back to main menu", next: "start" }
        ]
    },

    contact: {
        message: "Thank you for your interest in my services! You can reach out to me through the contact form on this website or connect with me on social media. I'm always excited to discuss new projects and opportunities.",
        options: [
            { label: "View my services again", next: "services" },
            { label: "See my projects", next: "projects" },
            { label: "Back to main menu", next: "start" }
        ]
    },

    // Additional helper flows
    help: {
        message: "I can help you learn about my background, skills, projects, services, and certifications. You can navigate using the buttons below or ask specific questions about my work.",
        options: [
            { label: "Start over", next: "start" },
            { label: "View projects", next: "projects" },
            { label: "Contact information", next: "contact" }
        ]
    }
};

const loadDialog = (step) => {
    const currentStep = dialogFlow[step];

    chatbox.innerHTML += `
        <div class="chat incoming thinking">
            <div class="chat-icon">
                <img src="pics/KJ.png" alt="Chat Icon" class="chat-icon-img">
            </div>
            <div class="chat-text">
                <p>Thinking...</p>
            </div>
        </div>`;

    chatbox.scrollTo(0, chatbox.scrollHeight);

    setTimeout(() => {
        document.querySelector('.thinking')?.remove();

        if (!currentStep) {
            chatbox.innerHTML += `
                <div class="chat incoming">
                    <div class="chat-icon">
                        <img src="pics/KJ.png" alt="Chat Icon" class="chat-icon-img">
                    </div>
                    <div class="chat-text">
                        <p>Thank you for chatting with us!</p>
                    </div>
                </div>`;
            if (dialogOptions) {
                dialogOptions.innerHTML = '';
            }
            return;
        }

        chatbox.innerHTML += `
            <div class="chat incoming previous-dialog" data-step="${step}">
                <div class="chat-icon">
                    <img src="pics/KJ.png" alt="Chat Icon" class="chat-icon-img">
                </div>
                <div class="chat-text">
                    <p>${currentStep.message}</p>
                </div>
            </div>`;

        const optionsContainer = document.createElement('div');
        optionsContainer.classList.add('chat', 'incoming');

        const optionsText = document.createElement('div');
        optionsText.classList.add('chat-text', 'dialog-options');

        currentStep.options.forEach(option => {
            const button = document.createElement('button');
            button.textContent = option.label;
            button.addEventListener('click', () => handleOptionClick(option.label, option.next));
            optionsText.appendChild(button);
        });

        optionsContainer.appendChild(optionsText);
        chatbox.appendChild(optionsContainer);

        chatbox.scrollTo(0, chatbox.scrollHeight);
    }, 1000);
};

const handleOptionClick = (label, next) => {
    chatbox.innerHTML += `
        <div class="chat outgoing">
            <p>${label}</p>
        </div>`;

    chatbox.scrollTo(0, chatbox.scrollHeight);
    loadDialog(next);
};

// CHATBOT TOGGLER
if (chatbotToggler) {
    chatbotToggler.addEventListener("click", () => {
        if (!document.body.classList.contains("show-chatbot")) {
            document.body.classList.add("show-chatbot");
            
            if (isMinimized) {
                // Restore from minimized state
                chatbot.classList.remove("minimized");
                isMinimized = false;
            } else {
                // New chatbot session
                chatbot.classList.remove("minimized");
                isMinimized = false;
                chatbox.innerHTML = "";
                if (dialogOptions) {
                    dialogOptions.innerHTML = "";
                }
                loadDialog("start");
            }
        }
    });
}

// CLOSE BUTTON - FIXED VERSION
if (chatbotCloseBtn) {
    chatbotCloseBtn.addEventListener("click", (e) => {

        // Prevent any conflicts
        e.preventDefault();
        e.stopPropagation();
        
        // Remove the show-chatbot class
        document.body.classList.remove("show-chatbot");
        
        // Reset minimized state
        if (chatbot) {
            chatbot.classList.remove("minimized");  
        }
        isMinimized = false;
        
    });
} else {
    console.error("Close button not found!");
}

// MINIMIZE BUTTON
if (minimizeBtn) {
    minimizeBtn.addEventListener("click", (e) => {
        e.preventDefault();
        e.stopPropagation();
        
        chatbot.classList.add("minimized");
        document.body.classList.remove("show-chatbot");
        isMinimized = true;
    });
}

// SEND BUTTON - SINGLE EVENT LISTENER
if (sendChatBtn) {
    sendChatBtn.addEventListener('click', () => {
        let userMessage = chatInput.value.trim();
        if (!userMessage) return;

        chatbox.innerHTML += `<div class="chat outgoing"><p>${userMessage}</p></div>`;
        chatInput.value = "";
        chatInput.style.height = `${inputInitHeight}px`;
        chatbox.scrollTo(0, chatbox.scrollHeight);

        let matchedStep = Object.keys(dialogFlow).find(key => key.includes(userMessage.toLowerCase().replace(/ /g, "_")));
        loadDialog(matchedStep || "start");
    });
}

// CHATBOX CLICK HANDLER
chatbox.addEventListener('click', (e) => {
    const button = e.target.closest('.chat-text button'); 
    if (button) {
        const previousDialog = button.closest('.previous-dialog');
        if (previousDialog) {
            const step = previousDialog.dataset.step;
            const optionLabel = button.textContent;
            const option = dialogFlow[step]?.options.find(opt => opt.label === optionLabel);
            if (option) {
                handleOptionClick(optionLabel, option.next);
            }
        }
    }
});

// INPUT EVENT LISTENERS
if (chatInput) {
    chatInput.addEventListener("input", () => {
        chatInput.style.height = `${inputInitHeight}px`;
        chatInput.style.height = `${chatInput.scrollHeight}px`;
    });

    chatInput.addEventListener("keydown", (e) => {
        if (e.key === "Enter" && !e.shiftKey && window.innerWidth > 800) {
            e.preventDefault();
            if (sendChatBtn) {
                sendChatBtn.click();
            }
        }
    });
}

if (chatTextarea && chatTextarea !== chatInput) {
    chatTextarea.addEventListener("input", () => {
        chatTextarea.style.height = "55px"; 
        chatTextarea.style.height = `${chatTextarea.scrollHeight}px`; 
        if (dialogOptions) {
            dialogOptions.style.bottom = `${chatTextarea.scrollHeight + 10}px`;
        }
    });
}


</script>


</body>

</html>


