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