// Ambil semua elemen dari HTML
const img1 = document.getElementById("img1");
const img2 = document.getElementById("img2");
const img3 = document.getElementById("img3");
const basket = document.getElementById("basket");
const basketstat = document.getElementById("basketstat");
const text = document.getElementById("text1");
const body = document.getElementById("bd");
const btnChangeText = document.getElementById("chtext");
const btnChangeBg = document.getElementById("bccol");

let flowerCount = 0;

// 🔹 Fungsi untuk memperbarui status keranjang
function updateBasketStatus() {
    basketstat.textContent = `The flower basket currently contains ${flowerCount} flower${
        flowerCount !== 1 ? "s" : ""
    }.`;
}

// 🔹 Fungsi untuk menambahkan bunga ke keranjang
function addFlowerToBasket(imgElement) {
    const clone = imgElement.cloneNode(true);
    clone.style.width = "100px";
    clone.style.height = "100px";
    clone.style.margin = "5px";
    clone.style.cursor = "pointer";
    clone.title = "Klik untuk menghapus dari keranjang";

    // Klik bunga di keranjang untuk menghapus
    clone.addEventListener("click", function () {
        basket.removeChild(clone);
        flowerCount--;
        updateBasketStatus();
    });

    basket.appendChild(clone);
    flowerCount++;
    updateBasketStatus();
}

// 🔹 Event listener untuk menambahkan bunga saat diklik
img1.addEventListener("click", () => addFlowerToBasket(img1));
img2.addEventListener("click", () => addFlowerToBasket(img2));
img3.addEventListener("click", () => addFlowerToBasket(img3));

// 🔹 Tombol untuk ubah warna teks paragraf
btnChangeText.addEventListener("click", function () {
    const color = prompt("Masukkan warna teks (misal: red, blue, #ff0000):");
    if (color) {
        text.style.color = color;
    }
});

// 🔹 Tombol untuk ubah warna background
btnChangeBg.addEventListener("click", function () {
    const color = prompt(
        "Masukkan warna latar (misal: yellow, lightblue, #ffff00):"
    );
    if (color) {
        body.style.backgroundColor = color;
    }
});
