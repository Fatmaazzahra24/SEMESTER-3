document.addEventListener('DOMContentLoaded', () => {

  const buyButtons = document.querySelectorAll('.cart-btn');

  buyButtons.forEach(button => {
    button.addEventListener('click', (e) => {
      e.preventDefault(); 
      const yakin = confirm('Apakah Anda yakin ingin membeli produk ini?');

      if (yakin) {
        alert('Terima kasih! Produk akan segera diproses.');
      } else {
        alert('Pembelian dibatalkan.');
      }
    });
  });

});
