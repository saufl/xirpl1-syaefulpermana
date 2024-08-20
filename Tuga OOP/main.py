class Laptop:
    def __init__(self, merk, harga):
        self.merk = merk
        self.harga = harga

    def info_laptop(self):
        print(f"Laptop merk: {self.merk}, Harga: {self.harga}")

# Membuat objek dari kelas Laptop
laptop_ku = Laptop("ASUS", 15000000)
laptop_ku.info_laptop()
