class Kalkulator:
    def __init__(self, angka1, angka2):
        # Menginisialisasi atribut angka1 dan angka2
        self.angka1 = angka1
        self.angka2 = angka2

    def tambah(self):
        # Mengembalikan hasil penjumlahan angka1 dan angka2
        return self.angka1 + self.angka2

    def kurang(self):
        # Mengembalikan hasil pengurangan angka1 dari angka2
        return self.angka1 - self.angka2

    def kali(self):
        # Mengembalikan hasil perkalian angka1 dan angka2
        return self.angka1 * self.angka2

    def bagi(self):
        # Mengembalikan hasil pembagian angka1 oleh angka2, menangani pembagian dengan nol
        if self.angka2 != 0:
            return self.angka1 / self.angka2
        else:
            return "Kesalahan: Pembagian dengan nol tidak diperbolehkan."


# Sistem input untuk menerima angka dari pengguna
angka1 = float(input("Masukkan angka pertama: "))
angka2 = float(input("Masukkan angka kedua: "))

# Membuat objek dari kelas Kalkulator
kalkulator = Kalkulator(angka1, angka2)

# Sistem input untuk memilih operasi
print("Pilih operasi yang ingin dilakukan:")
print("1. Penjumlahan")
print("2. Pengurangan")
print("3. Perkalian")
print("4. Pembagian")

operasi = input("Masukkan pilihan operasi (1/2/3/4): ")

# Melakukan operasi berdasarkan pilihan pengguna dan menampilkan hasilnya
if operasi == '1':
    print("Hasil Penjumlahan:", kalkulator.tambah())
elif operasi == '2':
    print("Hasil Pengurangan:", kalkulator.kurang())
elif operasi == '3':
    print("Hasil Perkalian:", kalkulator.kali())
elif operasi == '4':
    print("Hasil Pembagian:", kalkulator.bagi())
else:
    print("Pilihan operasi tidak valid.")
