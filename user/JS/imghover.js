// Image and its lens hover effect code
let imageCon = document.querySelector(".imageCon");
let lens = document.querySelector(".lens");
let result = document.querySelector(".result");
let image = document.querySelector(".img");

let imageConRect = imageCon.getBoundingClientRect();
let lensRect = lens.getBoundingClientRect();
let resultRect = result.getBoundingClientRect();
let imageRect = image.getBoundingClientRect();

imageCon.addEventListener("mousemove", moveLens);
  result.style.backgroundImage = `url(${image.src})`

function moveLens(e) {
  let { x, y } = getMousePosition(e);
  lens.style.left = x + "px";
  lens.style.top = y + "px";

  let fx = resultRect.width / lensRect.width
  let fy = resultRect.height / lensRect.height

  result.style.backgroundSize = `${imageRect.width * fx}px ${imageRect.height * fy}px`
  result.style.backgroundPosition = `-${x * fx}px -${y * fy}px`

}

function getMousePosition(e) {
  let x = e.clientX - lensRect.left - lensRect.width / 3;
  let y = e.clientY - lensRect.top - lensRect.height / 3;

  let minX = 0;
  let minY = 0;
  let maxX = imageConRect.width - lensRect.width;
  let maxY = imageConRect.height - lensRect.height;

  if (x <= minX) {
    x = minX;
  } else if (x >= maxX) {
    x = maxX;
  }

  if (y <= minY) {
    y = minY;
  } else if (y >= maxY) {
    y = maxY;
  }

  return { x, y };
}
