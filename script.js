const TEXT = "Te Espero";
const LEN = TEXT.length;
const chars = TEXT.split("");
const DURATION = 4000;
const Line1 = document.querySelector(".text-1");
const Line2 = document.querySelector(".text-2");

chars.forEach((char, i) => {
  const createEle = (offset) => {
    const el = document.createElement("span");
    el.textContent = char;
    el.classList.add("char");
    el.setAttribute("data-offset", offset);
    el.style.animationDelay = `-${i * (DURATION / LEN) - offset}ms`;
    return el;
  };
  Line1.append(createEle(0));
  Line2.append(createEle(-1 * (DURATION / 2)));
});


