 const berita = [
            "Parrot OS swap memory",
            "Text Cut Off and Extra Spacing When Exporting HTML to PDF with html2pdf",
            "Cara benerin DOM Order",
            "ART Sahroni Terluka?????"
        ];

        const form = document.getElementById('searchForm');
        const input = document.getElementById('searchInput');
        const hasilDiv = document.getElementById('hasil');

        form.addEventListener('submit', function (e) {
            e.preventDefault();
            const keyword = input.value.toLowerCase();
            let hasil = "";

            berita.forEach(b => {
                if (b.toLowerCase().includes(keyword)) {
                    hasil += `<li>${b}</li>`;
                }
            });

            if (hasil === "") {
                hasilDiv.innerHTML = "<p>Tidak ada hasil ditemukan.</p>";
            } else {
                hasilDiv.innerHTML = `
                    <h4>Hasil Pencarian:</h4>
                    <ul>${hasil}</ul>
                `;
            }
        });