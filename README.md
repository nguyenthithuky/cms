# cms

use php
php 5.6.3

## 88: making our file resuable

- footer and header
- include header to file index.php
- navigation and include
- sidebar

## 89 insert data in to categories table and display it

- query into database
- display data to UI

## 90 create the post table

- add table posts with 7 columns
  post_tags varchar 255
  post_comment_count int 11
  post_status varchar 255 default [draft,pulish]

## 91 post comment count update with count must be int not varchar

## 93 handle image

img src images/ tên của ảnh .

## 94 create custom search enginear

sidebar/

- form action ="" , method post
- button type= submit
- input name = search
- use function $\_POST['search']
- use condition if wwith function isset() check when click button in form

## 95

$query = "SELECT * FROM posts WHERE post_tags LIKE '%$search%'"
$search_query = mysqli_query($connect,$query );
if (!$search_query){
die("ERROR SEARCH".mysqli_error($connect))
}
 $count = mysqli_num_rows($search_query );
 if($count ==0){
    echo "<h1>No Result </h1>"
 }else {
     echo "<h1>have Result  </h1>"
 }
 ## bài 96 done 
 ## 97 done code 
 query dữ liệu trong database và hiển thị ra màn hình 
 $query "SELECT * FROM categories limit 3"// change 3 
 $select_all_categories = mysqli_query($connection , $query);
 white($row = msqli_fetch_assoc($select_all_categories)){
  $cat_title =$row['cat_title'];
  echo "<li><a href="#"> {$cat_title}</a></li>"
 }
 - handle router/cms tạo 1 component widget dùng để hiển thị widget 
 - cần giới hần số lượng category tải về  $query "SELECT * FROM categories limit 3"
 
 ## 98  kết thúc nhưng chưa làm 
 trong cms/home thì cần thêm router để chuyển trang nhanh sang home 
 - <li> <a href="admin"></a></li>
 - sau khi có giao diện rồi (FE cắt giao diện ) 
 - làm chức năng cho nó khi vào router cms/admin thì trình duyệt sẽ tìm file index.php 
 file php cần tách thành các file nhỏ hơn ---> cần taoj folder includes 
 - header.php---> copy html include <body> why ??

 - footer.php không có 
 - navigation  

 ## 99 
 change ui 
 1. taooj post có view all and add
 tạo dropdown - view all post and add post 
 delete Chart ,table foerm
 Id : dropdown , posts_dropdown
 2. 

