(() => {
  const refs = {
    wrapper: document.querySelector(".cookiesWrapper"),
    closeBtn: document.querySelector(".cookiesBtn"),
    openBurger: document.querySelector(".input"),
    burger: document.querySelector(".navList"),
  };

  refs.closeBtn.addEventListener("click", cookies);
  refs.openBurger.addEventListener("click", burger);


  function burger() {
    refs.burger.classList.toggle("is-vissually");
  }
  function cookies() {
    refs.wrapper.classList.toggle("is-hidden");
  }
})();
