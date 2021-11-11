(() => {
  const refs = {
    openBurger: document.querySelector(".input"),
    burger: document.querySelector(".navList"),
  };

  refs.openBurger.addEventListener("click", toggleModal);

  function toggleModal() {
    refs.burger.classList.toggle("is-vissually");
  }
})();
