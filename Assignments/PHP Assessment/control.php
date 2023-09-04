<?php
// error_reporting(E_ALL);
// ini_set('display_errors', 1);

include_once('model.php');
class control extends model
{
        function __construct()
		{
			session_start();
			model::__construct();

			$path=$_SERVER['PATH_INFO'];

			switch ($path)
			
		     
			 {
				case '/index':
					include_once('index.php');
					break;

				case '/index2':
					
						include_once('index2.php');
						break;

				
						
				case '/serach_book':
					$book_arr=$this->select('books');

							include_once('serach_book.php');
							break;

				case '/viewbook':
					$book_arr=$this->select('books');

					include_once('viewbook.php');
					break;

				case '/edit_book':
					include_once('edit_book.php');
									break;

				case '/change_pass':
					include_once('change_pass.php');
					break;
				
				case '/forms':
					if(isset($_REQUEST['submit']))
				{
					$book_name=$_REQUEST['book_name'];
                    $author=$_REQUEST['author'];
                    $quantity=$_REQUEST['quantity'];
                	$price=$_REQUEST['price'];
                    $category=$_REQUEST['category'];

					date_default_timezone_set('asia/calcutta');
				    $created_at=date('Y-m-d H:i:s');
				    $upadte_at=date('Y-m-d H:i:s');

					$arry=array("book_name"=>$book_name,"author"=>$author,"quantity"=>$quantity,"price"=>$price	,"category"=>$category,"created_at"=>$created_at,"upadte_at"=>$upadte_at);
                    $res=$this->insert('books',$arry);
                    if($res)
                    {
                        echo "
                        <script>
                        alert('books id add');
                        window.location='forms';
                        </script>
                        ";
                    }
                    else
                    {
                        echo "
						<script>
                        alert('books id  not add');
                        window.location='index';
                        </script>
						";
                    }
                }
				
						include_once('forms.php')
						;
						break;
						case'/delete':
							if(isset($_REQUEST['del_book_id'])){
								$book_id=$_REQUEST['del_book_id'];
								$where=array("book_id"=>$book_id);
								$res=$this->delete_where('books',$where);
								if($res){
									echo"
									<script>
									alert('delete sucess');
									window.location='viewbook';
									</script>
									";
								}else{
									echo"fail";
								}

							}
							break;
							case'/edit':
								if(isset($_REQUEST['edit_book_id'])){
									$id=$_REQUEST['edit_book_id'];
									$where=array("id"=>$id);
									$res=$this->select_where('books',$where);
									
									$fetch=$res->fetch_object();
									
									if(isset($_REQUEST['submit'])){
										$book_name=$_REQUEST['book_name'];
										$author=$_REQUEST['author'];
										$quantity=$_REQUEST['quantity'];
										$price=$_REQUEST['price'];
										$category=$_REQUEST['category'];
										date_default_timezone_set('asia/calcutta');
										$created_at=date('Y-m-d H:i:s');
										$upadte_at=date('Y-m-d H:i:s');
										$arr=array("book_name"=>$book_name,"author"=>$author,"quantity"=>$quantity,"price"=>$price,"category"=>$category);
										$res=$this->update('books',$arr,$where);
									  if($res){
										echo"
										<script>
										alert('update sucess');
										window.location='viewbook';
										</script>
										";
									  }else{
										echo"
										<script>
										alert('update fail');
										window.location='viewbook';
										</script>
										";
									  }
  
									}
									
									


									
								}
								include_once('editbook.php');
                                    break;
									
				                    default:
			                            echo "<h1>Page Not Found</h1>";
			                                    break;
		}
	
		}
	}	

$obj=new control;
?>