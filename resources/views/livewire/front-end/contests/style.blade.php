<style>
    @import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@400;600&display=swap');

/* *, *::after, *::before {
    margin: 0;
  padding: 0;
  box-sizing: border-box;
}

* {
  font: inherit;


}

body {
  height:100vh;
  background-color: hsl(240, 19%, 12%);
  font-family: 'Quicksand', sans-serif;
  display:flex;
  align-items:center;
  justify-content:center
} */

/* variables */
:root {
  /* colors */
  --ri5-color-primary-hsl: 242, 69%, 52%;
  --ri5-color-bg-hsl: 0, 0%, 100%;
  --ri5-color-contrast-high-hsl: 230, 7%, 23%;
  --ri5-color-contrast-higher-hsl: 230, 13%, 9%;
  --ri5-color-bg-darker-hsl: 240, 4%, 90%;
  --ri5-color-white-hsl: 0, 0%, 100%;

  /* typography */
  --ri5-text-sm: 0.833rem;
  
  --radio-switch-width: 186px;
  --radio-switch-height: 46px;
  --radio-switch-padding: 1px;
  --radio-switch-radius: 100vw;
  --radio-switch-animation-duration: 0.3s;
}

.radio-switch {
  position: relative;
  display: inline-flex;
  padding: var(--radio-switch-padding);
  border-radius: calc(var(--radio-switch-radius) * 1.4);
  /* background-color: hsl(var(--ri5-color-bg-darker-hsl)); */
  top: 15px;
}
.radio-switch:focus-within, .radio-switch:active {
  box-shadow: 0 0 0 2px hsla(var(--ri5-color-contrast-higher-hsl), 0.15);
}

.radio-switch__item {
  position: relative;
  display: inline-block;
  height: calc(var(--radio-switch-height) - 2*var(--radio-switch-padding));
  width: calc(var(--radio-switch-width)*0.5 - var(--radio-switch-padding));
}

.radio-switch__label {
  position: relative;
  z-index: 2;
  display: flex;
  height: 100%;
  align-items: center;
  justify-content: center;
  font-weight:700;
  border-radius: var(--radio-switch-radius);
  cursor: pointer;
  font-size: var(--ri5-text-sm);
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
  transition: all var(--radio-switch-animation-duration);
}
.radio-switch__input:checked ~ .radio-switch__label {
  color: hsl(var(--ri5-color-white-hsl));

}
.radio-switch__input:focus ~ .radio-switch__label {
  /* background-color: hsla(var(--ri5-color-primary-hsl), 0.6)); */
background-image:  -webkit-linear-gradient(7deg, rgb(236, 19, 121) 0%, rgb(108, 0, 146) 100%);
}
.radio-switch__label :not(*):focus-within, .radio-switch__input:focus ~ .radio-switch__label {
  background-color: transparent;
}

.radio-switch__marker {
  position: absolute;
  z-index: 1;
  top: 0;
  left: -100%;
  border-radius: var(--radio-switch-radius);
  /* background-color: hsl(var(--ri5-color-primary-hsl));
   */
   background-image:  -webkit-linear-gradient(7deg, rgb(236, 19, 121) 0%, rgb(108, 0, 146) 100%);

  height: calc(var(--radio-switch-height) - 2*var(--radio-switch-padding));
  width: calc(var(--radio-switch-width)*0.5 - var(--radio-switch-padding));
  box-shadow: 0 0.9px 1.5px rgba(0, 0, 0, 0.03),0 3.1px 5.5px rgba(0, 0, 0, 0.08),0 14px 25px rgba(0, 0, 0, 0.12);
  transition: -webkit-transform var(--radio-switch-animation-duration);
  transition: transform var(--radio-switch-animation-duration);
  transition: transform var(--radio-switch-animation-duration), -webkit-transform var(--radio-switch-animation-duration);
}
.radio-switch__input:checked ~ .radio-switch__marker {
  -webkit-transform: translateX(100%);
          transform: translateX(100%);
}

/* utility classes */
.ri5-sr-only {
  position: absolute;
  clip: rect(1px, 1px, 1px, 1px);
  clip-path: inset(50%);
  width: 1px;
  height: 1px;
  overflow: hidden;
  padding: 0;
  border: 0;
  white-space: nowrap;
}

/* ------------------------ Watermark (Please Ignore) ----------------------- */
.watermark-ctr {
  --clr-button-bg: #141414;
  --clr-button: 72, 39, 236;
  --clr-text: #ffffff;

  position: fixed;
  bottom: 1.5rem;
  right: 1.5rem;
  z-index: 1000;
}
.watermark-ctr a {
  text-decoration: none;
  color: inherit;
  display: flex;
}
.generate-button {
  --generate-button-star-1-opacity: 0.25;
  --generate-button-star-1-scale: 1;
  --generate-button-star-2-opacity: 1;
  --generate-button-star-2-scale: 1;
  --generate-button-star-3-opacity: 0.5;
  --generate-button-star-3-scale: 1;
  --generate-button-dots-opacity: 0;
  appearance: none;
  outline: none;
  border: none;
  padding: 14px 24px 14px 20px;
  border-radius: 29px;
  margin: 0;
  background-color: var(--clr-button-bg);
  color: var(--clr-text);
  display: flex;
  align-items: center;
  justify-content: center;
  position: relative;
  cursor: pointer;
  -webkit-tap-highlight-color: transparent;
  z-index: 1;
  transform: scale(var(--generate-button-scale, 1)) translateZ(0);
  box-shadow: 0px 0px 120px var(--generate-button-shadow-wide, transparent),
    0px 4px 12px rgba(0, 0, 0, 0.05), 0px 1px 2px rgba(0, 0, 0, 0.1),
    inset 0px 1px 1px
      var(--generate-button-shadow-inset, rgba(255, 255, 255, 0.04)),
    0 0 0 var(--generate-button-shadow-outline, 0px)
      rgba(var(--clr-button), 0.4);
  transition: transform 0.3s, background-color 0.3s, box-shadow 0.3s, color 0.3s;
}
.generate-button:before {
  content: "";
  display: block;
  position: absolute;
  right: 20%;
  height: 20px;
  left: 20%;
  bottom: -10px;
  background: rgba(204, 204, 204, 0.4);
  filter: blur(12.5px);
  z-index: 2;
  clip-path: inset(-200% -30% 10px -30% round 29px);
  opacity: 0;
  transition: opacity 0.4s;
  transform: translateZ(0);
}
.generate-button span {
  position: relative;
  z-index: 1;
  font-family: "Poppins", Arial;
  font-weight: 600;
  font-size: 16px;
  letter-spacing: 0.005em;
  display: block;
  user-select: none;
}
.generate-button .stroke {
  mix-blend-mode: hard-light;
}
.generate-button .stroke svg {
  position: absolute;
  inset: 0;
  width: 100%;
  height: 100%;
  fill: none;
  stroke-width: 0.75px;
  stroke: #e2d9ff;
  stroke-dasharray: 1.5 14;
  stroke-dashoffset: 22;
  opacity: 0;
}
.generate-button .stroke svg:nth-child(2) {
  stroke-width: 1px;
  stroke-opacity: 0.5;
  filter: blur(3px);
}

.generate-button svg.icon {
  width: 18px;
  height: 20px;
  margin-right: 10px;
  fill: currentColor;
}
.generate-button svg.icon path:nth-child(1) {
  opacity: var(--generate-button-star-1-opacity);
  transform: scale(var(--generate-button-star-1-scale)) translateZ(0);
  transform-origin: 25% 14.58%;
}
.generate-button svg.icon path:nth-child(2) {
  opacity: var(--generate-button-star-2-opacity);
  transform: scale(var(--generate-button-star-2-scale)) translateZ(0);
  transform-origin: 60.42% 50%;
}
.generate-button svg.icon path:nth-child(3) {
  opacity: var(--generate-button-star-3-opacity);
  transform: scale(var(--generate-button-star-3-scale)) translateZ(0);
  transform-origin: 25% 85.42%;
}
.generate-button:hover {
  --generate-button-scale: 1.01;
  --generate-button-shadow-wide: rgba(var(--clr-button), 0.4);
  --generate-button-shadow-inset: rgba(255, 255, 255, 0.35);
  --generate-button-shadow-outline: 3px;
  color: var(--clr-text);
  background-color: rgba(var(--clr-button));
}
.generate-button:hover .stroke svg {
  animation: stroke 2s linear infinite;
}
.generate-button:hover:before {
  opacity: 1;
}
.generate-button:hover span:before {
  opacity: 0;
}
.generate-button:hover:active {
  --generate-button-scale: 1.05;
}
@keyframes stroke {
  0% {
    opacity: 0;
  }
  25%,
  75% {
    opacity: 1;
  }
  95%,
  100% {
    stroke-dashoffset: 6;
    opacity: 0;
  }
}

</style>