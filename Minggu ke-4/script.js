let data = {};

    const pilihNim = () => {

			const valueNimMhs = document.getElementById('nim_mhs').selectedIndex;
            const namaMhs = document.getElementsByTagName("option")[valueNimMhs].value;
            const valueNamaMhs = document.getElementById('nama_mhs');

            valueNamaMhs.value = namaMhs;

            data.nama = valueNamaMhs.value;

            if (valueNamaMhs.value === "Muh. Amin") {
                return data.nim = "A11.2015.12345"
            } else if (valueNamaMhs.value === "Santoso") {
                return data.nim = "A11.2015.12346"
            } else {
                return data.nim = "A11.2015.12347"
            }
        }
		
		const hitungNilaiAkhir = () => {
		
			const nilaiTugas = document.getElementById('tugas');
			const nilaiUts = document.getElementById('uts');
			const nilaiUas = document.getElementById('uas');
			const nilaiAkhir = document.getElementById('akhir');
			
			let valueNilaiTugas = nilaiTugas.value;
			let valueNilaiUts = nilaiUts.value;
			let valueNilaiUas = nilaiUas.value;
			
			let hasil = (0.4 * valueNilaiTugas) + (0.3 * valueNilaiUts) + (0.3 * valueNilaiUas);
			
			nilaiAkhir.value = hasil;
			
			data.hasil = hasil;
			
			const table = document.getElementById('table');
			table.innerHTML =
				`<table>
					<tr>
						<th>NIM</th>
						<th>Nama</th>
						<th>Nilai Akhir</th>
						<th>Status</th>
					</tr>
					<tr>
						<td>${data.nim}</td>
						<td>${data.nama}</td>
						<td>${data.hasil}</td>
						<td>${hasil>60? 'Lulus' : 'Tidak Lulus'}</td>
					</tr>
				</table>`
		}