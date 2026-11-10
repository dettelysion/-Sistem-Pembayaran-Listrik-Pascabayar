import time
import sys

def input_numbers():
    n = int(input("Masukkan jumlah nilai tugas: "))
    numbers = []
    for i in range(n):
        num = int(input(f"Angka ke-{i+1}: "))
        numbers.append(num)
    return numbers

def bubble_sort(numbers):
    arr = numbers.copy()
    n = len(arr)
    for i in range(n):
        for j in range(0, n-i-1):
            if arr[j] > arr[j+1]:
                arr[j], arr[j+1] = arr[j+1], arr[j]
    return arr

def binary_search(arr, target):
    left, right = 0, len(arr) - 1
    while left <= right:
        mid = (left + right) // 2
        if arr[mid] == target:
            return True
        elif arr[mid] < target:
            left = mid + 1
        else:
            right = mid - 1
    return False

def main():
    numbers = []
    sorted_numbers = []
    while True:
        print("\nMENU PILIHAN")
        print("1. Input angka")
        print("2. Sorting")
        print("3. Searching")
        print("4. Keluar")
        choice = input("Masukkan pilihan [1/2/3/4]: ")
        if choice == '1':
            numbers = input_numbers()
            print("Data berhasil diinput!")
        elif choice == '2':
            if not numbers:
                print("Data kosong! Silakan input angka terlebih dahulu.")
            else:
                start = time.time()
                sorted_numbers = bubble_sort(numbers)
                end = time.time()
                print("Hasil sorting:", sorted_numbers)
                print(f"Waktu eksekusi sorting: {end-start:.6f} detik")
                print(f"Estimasi penggunaan memori: {sys.getsizeof(sorted_numbers)} bytes")
        elif choice == '3':
            if not sorted_numbers:
                print("Data belum diurutkan! Silakan lakukan sorting terlebih dahulu.")
            else:
                target = int(input("Masukkan angka yang dicari: "))
                start = time.time()
                found = binary_search(sorted_numbers, target)
                end = time.time()
                if found:
                    print("Angka ditemukan!")
                else:
                    print("Angka tidak ditemukan!")
                print(f"Waktu eksekusi searching: {end-start:.6f} detik")
                print(f"Estimasi penggunaan memori: {sys.getsizeof(sorted_numbers)} bytes")
        elif choice == '4':
            print("Terima kasih!")
            break
        else:
            print("Pilihan tidak valid!")

if __name__ == "__main__":
    main() 