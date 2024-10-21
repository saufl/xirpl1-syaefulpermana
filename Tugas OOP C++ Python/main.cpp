#include <iostream>
using namespace std;

class Laptop {
private:
    string merk;
    int harga;

public:
    // Konstruktor
    Laptop(string m, int h) : merk(m), harga(h) {}

    void infoLaptop() const {
        cout << "Laptop merk: " << merk << ", Harga: " << harga << endl;
    }

    // Destruktor otomatis
};

int main() {
    Laptop laptop_ku("ASUS", 15000000);
    laptop_ku.infoLaptop();

    return 0; // Destruktor otomatis dipanggil di akhir program
}
