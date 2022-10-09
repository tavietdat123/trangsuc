const detailcontaineritemimg = document.querySelectorAll(
  ".detail_container_item_img"
);
const detailimgmain = document.querySelector(".detail_img_main img");
detailcontaineritemimg.forEach((el, index) => {
  el.onclick = () => {
    document
      .querySelector(".detail_container_item_img.active")
      .classList.remove("active");

    el.classList.add("active");

    detailimgmain.src = el.firstChild.src;
  };
});
const producttrendinglist = document.querySelector(".product_trending_list");
const producttrendingprev = document.querySelector(".product_trending_prev");
const producttrendingnext = document.querySelector(".product_trending_next");
let indexprdtrend = 0;
const producttrendingitem = document.querySelectorAll(".product_trending_item");

const newhomeprdtrenditem = Array.from(producttrendingitem);

producttrendingprev.onclick = () => {
  indexprdtrend--;
  if (indexprdtrend < 0) {
    indexprdtrend = newhomeprdtrenditem.length - 4;
  }
  const size1 = 280 * indexprdtrend;
  producttrendinglist.style.transform = `translateX(-${size1}px)`;
};
producttrendingnext.onclick = () => {
  indexprdtrend++;
  if (indexprdtrend > newhomeprdtrenditem.length - 4) {
    indexprdtrend = 0;
  }
  const size1 = 280 * indexprdtrend;
  producttrendinglist.style.transform = `translateX(-${size1}px)`;
};
