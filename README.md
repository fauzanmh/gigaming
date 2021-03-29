# Kasus yang diberikan
1. Mencari nama dengan usia yang paling banyak muncul berdasarkan contoh yang diberikan.
2. Mencari nama dengan jumlah orang yang muncul terbanyak dari kelompok usia berdasarkan contoh yang diberikan.

# Bahasa yang digunakan
php

# File pemecahan kasus
index.php

# Penjelasan pemecahan kasus
1. Line 3 index.php merupakan pengambilan file contoh yang diberikan.
2. Line 4 merupakan perubahan/konversi data json menjadi array
3. Line 6 merupakan deklarasi variabel name yang nantinya digunakan sebagai penampung data untuk pemecahan no 1
4. Line 7 merupakan deklarasi variabel nameGroup yang nantinya digunakan sebagai penampung data untuk pemecahan no 2
5. Line 8 merupakan deklarasi variabel age yang digunakan sebagai penampung nilai usia pada contoh yang diberikan
6. Line 10 perulangan contoh data yang berisi penumpang kapal dengan atribut nama dan usia
7. Line 11 memasukkan nilai usia pada variabel age berdasarkan perulangan
8. Line 14 menghitung nilai usia yang sama berdasarkan data pada variabel age yang ditampung pada variabel most
9. Line 15 mengurutkan data dengan jumlah terbesar berdasarkan variabel most
10. Line 16 menghitung kelompok usia dengan orang muncul yang sama berdasarkan data variabel most yang ditampung pada variabel groupMost 
11. Line 17 mengurutkan data dengan jumlah terbesar berdasarkan variabel groupMost
12. Line 19 mengambil kunci array dari variabel most yang ditampung pada amountKeys
13. Line 20 mengambil nilai array dari varible most yang ditampung pada amountValues
14. Line 21 mengambil 1 kunci array dari varible groupMost yang ditampung pada groupAmountKey
15. Line 22 deklarsi varibel gorupKey yang digunakan sebagai kunci array
16. Line 24 perulangan nilai usia yang telah diurutkan berdasarkan terbanyak muncul
17. Line 25 perulangan contoh data yang berisi penumpang kapal dengan atribut nama dan usia 
18. Line 26 pengecekan kunci perulangan data usia dengan ketentuan 0 dan pengecekan nilai usia. Apabila terpenuhi 2 kententuan tersebut maka nilai nama pada contoh data akan dimasukkan pada varibel name
19. Line 27 memasukkan nilai nama pada variabel name apabila 2 ketentuan pada line 26 terpenuhi.
20. Line 30 pengecekan nilai usia dan pengecekan jumlah orang yang muncul terbanyak dari kelompok usia. Apabila terpenuhi 2 ketentuan tersebut maka nilai nama pada contoh data akan dimasukkan pada varibel nameGroup.  
21. Line 31 memasukkan nilai nama pada variabel nameGroup apabila 2 ketentuan pada line 30 terpenuhi dengan himpunan yang terpisah berdasarkan kelompok usia.
22. Line 35 pengecekan jumlah orang yang muncul terbanyak dari kelompok usia. Apabila terpenuhi ketentuan tersebut maka variabel groupKey bertambah 1 nilai.
22. Line 36 penambahan 1 nilai pada variabel groupKey apabila kententuan pada 35 terpenuhi.
23. Line 40 konversi array menjadi json ditampung dengan variabel data
24. Line 41-44 pengisian kunci pertama pada variabel data dengan 2 attribut yaitu statment, dan output. Berisi masing-masing pernyataan kunci pertama, dan isi dari kunci pertama. Kunci pertama ini merupakan jawaban dari kasus no. 1
25. Line 45-48 pengisian kunci kedua pada variabel data dengan 2 attribut yaitu statment, dan output. Berisi masing-masing pernyataan kunci kedua, dan isi dari kunci kedua. Dan kunci kedua ini merupakan jawaban dari kasus no. 2
26. Line 51 menampilkan / mengeksekusi statment program ke layar monitor
27. Line 52 menulis teks ke file dengan nama backend-titanic-output.json yang berisi jawaban no.1 dan no.2

# Ouput
1. Ouput Screen
![output-screen](https://user-images.githubusercontent.com/33658024/112792900-80777400-908e-11eb-9f9f-0368474eecae.png)
2. Ouput File
![output-file](https://user-images.githubusercontent.com/33658024/112792910-853c2800-908e-11eb-849a-ae31a1817505.png)


 
