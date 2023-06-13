const maxLenNum = (aNum, bNum) => (aNum > bNum ? aNum : bNum).toString().length +1;

const num2PadNumArr = (num, len) => {
  const padLeftStr = (rawStr, lenNum) =>
    rawStr.length < lenNum ? padLeftStr("0" + rawStr, lenNum) : rawStr;
  const str2NumArr = rawStr => rawStr.split("").map(Number);
  return str2NumArr(padLeftStr(num.toString(), len)).reverse();
};

const isstr = any => Object.prototype.toString.call(any) === "[object String]";
var remainder = 0;
class FlipJackpotNumbers {
  constructor({
    node,
    from = 0,
    to,
    duration = 10,
    delay,
    easeFn = pos => pos,
    //easeFn = pos =>
    //  (pos /= 0.5) < 1
    //    ? 0.5 * Math.pow(pos, 3)
    //    : 0.5 * (Math.pow(pos - 2, 3) + 2),
    systemArr = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9],
    direct = true,
    separator = ".",
    seperateOnly = 0,
    separateEvery = 0
  }) {
    this.beforeArr = [];
    this.afterArr = [];
    this.ctnrArr = [];
    this.duration = duration * 1000;
    this.systemArr = systemArr;
    this.easeFn = easeFn;
    this.from = from;
    this.to = to || 0;
    this.node = node;
    this.direct = direct;
    this.separator = separator;
    this.seperateOnly = seperateOnly;
    this.separateEvery = seperateOnly ? 0 : separateEvery;
    this._initHTML(maxLenNum(this.from, this.to));
    if (to === undefined) return;
    if (delay) setTimeout(() => this.flipTo({ to: this.to }), delay * 1000);
    else this.flipTo({ to: this.to });
  }

  _initHTML(digits) {
    this.node.classList.add("component_jackpot_slider");
    this.node.style.position = "relative";
    this.node.style.overflow = "hidden";
    for (let i = 0; i < digits; i += 1) {
        let ctnr = document.createElement("div");
        if (i == 0) {
            ctnr.className =
                "component_jackpot_slider_number_wrapper component_jackpot_slider_number_wrapper0 hide"
        } else {
            ctnr.className =
                "component_jackpot_slider_number_wrapper component_jackpot_slider_number_wrapper" +
                i;
        }
        
        var restDigitsCount = digits - this.seperateOnly;
        
        if (i < digits - this.seperateOnly) {
            if (i == restDigitsCount % 3 || (i - remainder) % 3 == 0) {
                remainder = i;
                ctnr.classList.add('comp_jack_padding');
            }
        }
        
      for (let j = 0; j < this.systemArr.length; j++) {
        let temp2 = document.createElement("div");
        temp2.className = "component_jackpot_slider_number";
        temp2.innerHTML = j;
        ctnr.appendChild(temp2);
        }
        
      let temp3 = document.createElement("div");
      temp3.className = "digit";
      temp3.innerHTML = this.systemArr[0];
      ctnr.appendChild(temp3);

      ctnr.style.position = "relative";
      ctnr.style.display = "inline-block";
      ctnr.style.verticalAlign = "top";
      this.ctnrArr.unshift(ctnr);
      this.node.appendChild(ctnr);
      this.beforeArr.push(0);
      if (
        !this.separator ||
        (!this.separateEvery && !this.seperateOnly) ||
        i === digits - 1 ||
        ((digits - i) % this.separateEvery != 1 &&
          digits - i - this.seperateOnly != 1)
      )
        continue;
      const sprtrStr = isstr(this.separator)
        ? this.separator
        : this.separator.shift();
      //   const sprtr = g("sprtr")(sprtrStr);
      const sprtr = document.createElement("div");
      sprtr.className = "sprtr";
      sprtr.innerHTML = sprtrStr;
      sprtr.style.display = "inline-block";
      this.node.appendChild(sprtr);
    }
    const resize = () => {
      this.height = this.ctnrArr[0].clientHeight / (this.systemArr.length + 1);
      this.node.style.height = this.height + "px";
      if (this.afterArr.length) this.frame(1);
      else
        for (let d = 0, len = this.ctnrArr.length; d < len; d += 1)
          this._draw({
            digit: d,
            per: 1,
            alter: ~~(this.from / Math.pow(100, d))
          });
    };
    resize();
    window.addEventListener("resize", resize);
  }

  _draw({ per, alter, digit }) {
    const newHeight =
      this.ctnrArr[0].clientHeight / (this.systemArr.length + 1);
    if (newHeight && this.height !== newHeight) this.height = newHeight;
    const from = this.beforeArr[digit];
    const modNum = (((per * alter + from) % 10) + 10) % 10;
    const translateY = `translateY(${-modNum * this.height}px)`;
    this.ctnrArr[digit].style.webkitTransform = translateY;
    this.ctnrArr[digit].style.transform = translateY;
  }

  frame(per) {
    let temp = 0;
    for (let d = this.ctnrArr.length - 1; d >= 0; d -= 1) {
      let alter = this.afterArr[d] - this.beforeArr[d];
      temp += alter;
      this._draw({
        digit: d,
        per: this.easeFn(per),
        alter: this.direct ? alter : temp
      });
      temp *= 10;
    }
  }

  flipTo({ to, duration, easeFn, direct }) {
    if (easeFn) this.easeFn = easeFn;
    if (direct !== undefined) this.direct = direct;
    const len = this.ctnrArr.length;
    this.beforeArr = num2PadNumArr(this.from, len);
    this.afterArr = num2PadNumArr(to, len);
    const start = Date.now();
    const dur = duration * 1000 || this.duration-10;
    const tick = () => {
      let elapsed = Date.now() - start;
      this.frame(elapsed / dur);
      if (elapsed < dur) requestAnimationFrame(tick);
      else {
        requestAnimationFrame(tick);
      }
    };
    requestAnimationFrame(tick);

  }
    destroy() {
        this.node.innerHTML = "";
        this.node.classList.remove('blink');
    }
}
