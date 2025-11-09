const list = document.querySelector("#daftar");
const tambahBtns = document.querySelectorAll(".tambah-btn");

tambahBtns.forEach((btn) => {
  btn.addEventListener("click", function () {
    const card = btn.closest(".card-body");
    const namaProduk = card.querySelector(".card-title").textContent;
    const hargaProduk = card.querySelector(
      ".card-text:nth-of-type(2)"
    ).textContent;

    // buat elemen baru untuk daftar
    const newItem = document.createElement("li");
    newItem.textContent = `${namaProduk} — ${hargaProduk}`;
    list.append(newItem);
    const total = document.getElementById(total);
    total += hargaProduk;
    updateTotal();

    const batalBtn = newItem.querySelector("button");
    batalBtn.addEventListener("click", function () {
      newItem.remove(); // hapus item
      total -= hargaProduk; // kurangi total
      updateTotal();
    });
  });
});
