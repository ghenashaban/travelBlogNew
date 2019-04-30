<?php

require_once 'models/Exception.php';

use function models\Exception\logException;

class Post {

    public $id;
    public $user_id;
    public $body;
    public $published;
    public $created_at;
    public $updated_at;
    public $categoryID;
    public $first_name;
    public $image;
    public $title;
    public $post_id;
    public $like_count;
    public $categories;

    public function __construct($title, $id, $body, $image, $categoryID, $categories) {
        $this->title = $title;
        $this->id = $id;
        $this->body = $body;
        $this->image = $image;
        $this->categoryID = $categoryID;
        $this->categories = $categories;

//        $this->post_id=$post_id;
//        $this->user_id=$user_id;
//         $this->like_count=$like_count;
    }

//    ,$body,$id, $published, $image_name
//             $this->body=$body;
//        $this->id=$id;
//        $this->title=$published;
//        $this->image=$image;
//    public function __construct($id, $user_id, $title, $body, $published, $created_at, $updated_at, $category_id){
//        $this->id=$id;
//        $this->user_id= $user_id;
//        $this->title=$title;
//        $this->body=$body;
//        $this->published=$published;
//        $this->created_at=$created_at;
//        $this->updated_at=$updated_at;
//        $this->category_id=$category_id;
//    }

    public static function all() {
        try {
            $list = [];
            $db = Db::getInstance();
            $req = $db->query("Select * from post ");
            // we create a list of Product objects from the database results
            foreach ($req->fetchAll() as $post) {
                $list[] = new Post($post['title'], $post['id'], $post['body'], $post['image'], "", "");
            }
            return $list;
        } catch (Exception $e) {
            call('pages', 'error');
            logException($e);
        }
    }

    public static function findByCat($categoryID) {
        try {
            $list = [];
            $db = Db::getInstance();
            $categoryID = intval($categoryID);
            $req = $db->query("select post.title, post.id, post.body, post.categoryID, category.categories  from post
            INNER JOIN category
            ON post.categoryID = category.id where categoryID = $categoryID ;  ");
            // we create a list of Product objects from the database results
            $req->execute(array('categoryID ' => $categoryID));
            foreach ($req->fetchAll() as $post) {
                $list[] = new Post($post['title'], $post['id'], $post['body'], "", "", $post['categories']);
            }
            return $list;
        } catch (Exception $e) {
            call('pages', 'error');
            logException($e);
        }
    }

    public static function search($searchTerm) { // find by user lne 137
      $list = [];
        $search = $_POST['search'];
        $db = Db::getInstance();
        $req = $db->prepare("SELECT * FROM post WHERE title LIKE '%$search%';");
        $req->execute();
        $rows = $req->rowCount();
        if ($rows > 0) {
            $results = $req->fetchAll();
            foreach ($results as $result) {
                $list [] = new Post($result['title'], $result['id'], $result['body'], $result['image'],"","");
            }
            return $list;
        } else {
          
            require_once('views/pages/noResult.php');
         exit();
        }
    }
     public static function searchAhead($search) { //search all content for something relevant
        $list = [];
        $db = Db::getInstance();
        $req = $db->prepare("SELECT distinct title FROM post WHERE title LIKE '%$search%';");
        $req->execute();
        $results = $req->fetchAll();
        foreach ($results as $result) {
            $list [] = $result['title'];
        }
        echo json_encode($list);
    }


    public static function remove($id) {
        try {
            $db = Db::getInstance();
            //make sure $id is an integer
            $id = intval($id);
            $req = $db->prepare('delete FROM post WHERE id = :id;');
            // the query was prepared, now replace :id with the actual $id value
            $req->execute(array('id' => $id));
        } catch (Exception $e) {
            call('pages', 'error');
            logException($e);
        }
    }

    public static function add() {
        try {
            $db = Db::getInstance();
            $req = $db->prepare("insert into post( title, body, user_id, categoryID  ) values (( :title), (:body), (:user_id), (select id from category where categories=:categories) );"
                    . "insert into liketotal(post_id, totalcount) 
            values ((select id from post where title=:title),
            ('0'));
            ");

            $req->bindParam(':title', $title);
            $req->bindParam(':body', $body);
            $req->bindParam(':image', $image);
            $req->bindParam(':user_id', $user_id);
            $req->bindParam(':categories', $categories);
            if (isset($_POST['title']) && $_POST['title'] != "") {
                $filteredTitle = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_SPECIAL_CHARS);
            }
            if (isset($_POST['user_id']) && $_POST['user_id'] != "") {
                $filteredUserId = filter_input(INPUT_POST, 'user_id', FILTER_SANITIZE_SPECIAL_CHARS);
            }
            if (isset($_POST['categories']) && $_POST['categories'] != "") {
                $filteredCategory = filter_input(INPUT_POST, 'categories', FILTER_SANITIZE_SPECIAL_CHARS);
            }
//     if(isset($_POST['post_id'])&& $_POST['post_id']!=""){
//        $filteredPostId = filter_input(INPUT_POST,'post_id', FILTER_SANITIZE_SPECIAL_CHARS);
//    }
            if (isset($_POST['body'])) {
                $filteredBody = $_POST['body'];
            }
//    if(isset($_POST['image'])&& $_POST['image']!=""){
//        $filteredimage = filter_input(INPUT_POST,'image', FILTER_SANITIZE_SPECIAL_CHARS);
//    }
            $categories = $filteredCategory;
            $user_id = $filteredUserId;
            $title = $filteredTitle;
            $body = $filteredBody;
//$image = $filteredimage;
            $req->execute();
            Post::uploadFile($title);
        } catch (Exception $e) {
            call('pages', 'error');
            logException($e);
        }
    }

const AllowedTypes = ['name/jpeg', 'name/jpg'];
const InputKey = 'myUploader';

public static function uploadFile(string $title) {
    
try {
	if (empty($_FILES[self::InputKey])) {
		//die("File Missing!");

                trigger_error("File Missing!");
            }
//	if (!in_array($_FILES[self::InputKey]['type'], self::AllowedTypes)) {
//		trigger_error("Handle File Type Not Allowed: " . $_FILES[self::InputKey]['type']);
//	}

            $tempFile = $_FILES[self::InputKey]['tmp_name'];
            $path = "C:/xampp/htdocs/travelBlogNew/views/images/";
            $destinationFile = $path . $title . '.jpeg';
            $imagePath = "uploads/" . $title . '.jpeg';
            if (!move_uploaded_file($tempFile, $destinationFile)) {
                return $imagePath;
            }
            if (file_exists($tempFile)) {
                unlink($tempFile);
            }
            return $imagePath;
        } catch (Exception $e) {
            call('pages', 'error');
            logException($e);
        }
}
  public static function find($id) {
      $db = Db::getInstance();
       $id = intval($id);
      $req = $db->prepare('select * from post where id = :id ');
      $req->execute(array('id' => $id));
      $post = $req->fetch();
if($post){
      return new Post ($post['title'], $post['id'],$post['body'],$post['image'],"","");
    }
    else
    {
        throw new Exception('A real exception should go here');
    }
    }


  

    public static function update($id) {
        try {
            $db = Db::getInstance();
            $req = $db->prepare("Update post set title=:title, body=:body where id=:id");
            $req->bindParam(':id', $id);
            $req->bindParam(':title', $title);
            $req->bindParam(':body', $body);
            if (isset($_POST['title']) && $_POST['title'] != "") {
                $filteredTitle = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_SPECIAL_CHARS);
            }

            if (isset($_POST['body'])) {
                $filteredBody = $_POST['body'];
            }

            $title = $filteredTitle;
            $body = $filteredBody;
            $req->execute();
            Post::uploadFile($title);
            if (!empty($_FILES[self::InputKey]['title'])) {
                Post::uploadFile($title);
            }
        } catch (Exception $e) {
            call('pages', 'error');
            logException($e);
        }
    }

    public static function RecentPost() {
        try {
            $list = [];
            $db = Db::getInstance();
            $req = $db->query('SELECT *
            FROM post
            WHERE created_at=(
            SELECT MAX(created_at) FROM post);');
            // we create a list of Post objects from the database results
            $post = $req->fetch();
            if ($post) {
                return new Post($post['title'], $post['id'], $post['body'], $post['image'], "", "");
            }
//    else "error";
        } catch (Exception $e) {
            call('pages', 'error');
            logException($e);
        }
    }

    public static function RecentPostDes() {
        try {
            $list = [];
            $db = Db::getInstance();
            $req = $db->query('SELECT *
        FROM post
        WHERE created_at=(
        SELECT MAX(created_at)
        FROM post
        where categoryID=1);');

            $post = $req->fetch();
            if ($post) {
                return new Post($post['title'], $post['id'], "", "", "", "");
            }
//    else "error";
        } catch (Exception $e) {
            call('pages', 'error');
            logException($e);
        }
    }

    public static function RecentPostEco() {
        try {
            $list = [];
            $db = Db::getInstance();
            $req = $db->query('SELECT *
        FROM post
        WHERE created_at=(
        SELECT MAX(created_at)
        FROM post
        where categoryID=2);');

            $post = $req->fetch();
            if ($post) {
                return new Post($post['title'], $post['id'], $post['body'], $post['image'], "", "");
            }
//    else "error";
        } catch (Exception $e) {
            call('pages', 'error');
            logException($e);
        }
    }

    public static function RecentPostFam() {
        try {
            $list = [];
            $db = Db::getInstance();
            $req = $db->query('SELECT *
        FROM post
        WHERE created_at=(
        SELECT MAX(created_at)
        FROM post
        where categoryID=3);');

            $post = $req->fetch();
            if ($post) {
                return new Post($post['title'], $post['id'], $post['body'], $post['image'], "", "");
            }
//    else "error";
        } catch (Exception $e) {
            call('pages', 'error');
            logException($e);
        }
    }

    public static function RecentPostIns() {
        try {
            $list = [];
            $db = Db::getInstance();
            $req = $db->query('SELECT *
        FROM post
        WHERE created_at=(
        SELECT MAX(created_at)
        FROM post
        where categoryID=4);');

            $post = $req->fetch();
            if ($post) {
                return new Post($post['title'], $post['id'], $post['body'], $post['image'], "", "");
            }
//    else "error";
        } catch (Exception $e) {
            call('pages', 'error');
            logException($e);
        }
    }

    public static function RecentPostTip() {
        try {
            $list = [];
            $db = Db::getInstance();
            $req = $db->query('SELECT *
        FROM post
        WHERE created_at=(
        SELECT MAX(created_at)
        FROM post
        where categoryID=5);');

            $post = $req->fetch();
            if ($post) {
                return new Post($post['title'], $post['id'], $post['body'], $post['image'], "", "");
            }
//    else "error";
        } catch (Exception $e) {
            call('pages', 'error');
            logException($e);
        }
    }

    public static function postLikeDes() {
        try {
            $list = [];
            $db = Db::getInstance();
            $req = $db->query('SELECT
        post.title, liketotal.post_id, post.id, liketotal.totalCount, liketotal.categoryID
        FROM liketotal
        inner JOIN post ON liketotal.post_id=post.id
        where totalCount=( SELECT max(totalCount) from liketotal where liketotal.categoryID=1);
        ');

            $post = $req->fetch();
            if ($post) {
                return new Post($post['title'], $post['id'], "", "", "", "");
            }
//    else "error";
        } catch (Exception $e) {
            call('pages', 'error');
            logException($e);
        }
    }

    public static function postLikeEco() {
        try {
            $list = [];
            $db = Db::getInstance();
            $req = $db->query('SELECT
        post.title, liketotal.post_id, post.id, liketotal.totalCount, liketotal.categoryID
        FROM liketotal
        inner JOIN post ON liketotal.post_id=post.id
        where totalCount=( SELECT max(totalCount) from liketotal where liketotal.categoryID=2);
        ');

            $post = $req->fetch();
            if ($post) {
                return new Post($post['title'], $post['id'], "", "", "", "");
            }
//    else "error";
        } catch (Exception $e) {
            call('pages', 'error');
            logException($e);
        }
    }

    public static function postLikeFam() {
        try {
            $list = [];
            $db = Db::getInstance();
            $req = $db->query('SELECT
        post.title, liketotal.post_id, post.id, liketotal.totalCount, liketotal.categoryID
        FROM liketotal
        inner JOIN post ON liketotal.post_id=post.id
        where totalCount=( SELECT max(totalCount) from liketotal where liketotal.categoryID=3);
        ');

            $post = $req->fetch();
            if ($post) {
                return new Post($post['title'], $post['id'], "", "", "", "");
            }
//    else "error";
        } catch (Exception $e) {
            call('pages', 'error');
            logException($e);
        }
    }

    public static function postLikeIns() {
        try {
            $list = [];
            $db = Db::getInstance();
            $req = $db->query('SELECT
        post.title, liketotal.post_id, post.id, liketotal.totalCount, liketotal.categoryID
        FROM liketotal
        inner JOIN post ON liketotal.post_id=post.id
        where totalCount=( SELECT max(totalCount) from liketotal where liketotal.categoryID=4);
        ');

            $post = $req->fetch();
            if ($post) {
                return new Post($post['title'], $post['id'], "", "", "", "");
            }
//    else "error";
        } catch (Exception $e) {
            call('pages', 'error');
            logException($e);
        }
    }

    public static function postLikeTip() {
        try {
            $list = [];
            $db = Db::getInstance();
            $req = $db->query('SELECT
        post.title, liketotal.post_id, post.id, liketotal.totalCount, liketotal.categoryID
        FROM liketotal
        inner JOIN post ON liketotal.post_id=post.id
        where totalCount=( SELECT max(totalCount) from liketotal where liketotal.categoryID=5);
        ');

            $post = $req->fetch();
            if ($post) {
                return new Post($post['title'], $post['id'], "", "", "", "");
            }
//    else "error";
        } catch (Exception $e) {
            call('pages', 'error');
            logException($e);
        }
    }

}
