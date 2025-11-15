 const berita = [
            "Parrot OS swap memory",
            "Text Cut Off and Extra Spacing When Exporting HTML to PDF with html2pdf",
            "Cara benerin DOM Order",
            "SpaceX Starship rocket explodes after Texas launch",
            "Nama : Junio Moses Nathanael<br>Kelas : X PPLG 1<br>Hobi : Tidur<br>Tempat, Tanggal Lahir : Jakarta, 8 April 2010",
            "Nama : Aurel Nadia Susanto<br>Kelas : X PPLG 1<br>Hobi : Denger musik<br>Tempat, Tanggal Lahir : Tangerang, 9 November 2010",
            "Nama : Callysta Felycia Chen<br>Kelas : X PPLG 1<br>Hobi : Banyak<br>Tempat, Tanggal Lahir : Tangerang, 30 Januari",
            "Nama : Gabriel Antonius Suryadi<br>Kelas : X PPLG 1<br>Hobi : Robotics<br>Tempat, Tanggal Lahir : Jakarta, 25 Juni",
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