# date dan strftime

Dalam membuat aplikasi, kadang kita memerlukan tanggal atau waktu dengan format tertentu seperti 25-10-2019, 25 Oktober 2019, dll. Format tersebut dapat kita hasilkan dengan fungsi bawaan php yaitu date dan strftime. Untuk pengaturan nama bulan ataupun nama hari sesuai negara misalnya Januari ataupun senin, maka digunakan fungsi strftime.  

# date
### Deskripsi
```
date ( string $format, [, int $timestamp = time() ] ) : string
```
Mengembalikan string yang sudah diformat sesuai dengan format yang ditentukan berdasarkan parameter timestamp yang ditentukan ataupun waktu saat ini jika parameter timestamp tidak ditentukan

### Parameter  
format  
&nbsp;&nbsp;format yang kita inginkan  
timestamp 
&nbsp;&nbsp;parameter opsional untuk timestamp  

## strftime
### Deskripsi
```
strftime ( string $format, [, int $timestamp = time() ] ) : string
```
Mengembalikan string yang sudah diformat sesuai dengan daerah biasa disebut locale. Nama bulan dan nama hari mengacu pada pengaturan locale saat ini dengan menggunakan fungsi setlocale

### Parameter  
format  
&nbsp;&nbsp;format yang kita inginkan  
timestamp 
&nbsp;&nbsp;parameter opsional untuk timestamp 

### Contoh Program
`date-dan-strftime.php

### Referensi
[PHP Manual untuk date](https://www.php.net/manual/en/function.date.php)  
[PHP Manual untuk strftime](https://www.php.net/manual/en/function.strftime.php)