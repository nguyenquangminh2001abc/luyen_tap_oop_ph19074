<?php


       // bài luyện tập lab OOP
       echo "<br> <h2>Bài 1 : </h2>";

       interface PhepTinh
       {
       
          public function Cong();

          public function Tru() ;

          public function Nhan();

          public function Chia();
       }

       Class TinhToan implements PhepTinh {


           public $a;
           public $b;

           public function __construct($cd , $gh)
           {
                $this->a = $cd ;
                $this->b = $gh ;
           }

           public function Cong(){
                   return ($this->a) + ($this->b ) ;
            }

           public function Tru()
            {
                return ($this->a) - ($this->b ) ;
            }

           public function Nhan()
            {
                return ($this->a) * ($this->b ) ;
            }

           public function Chia()
            {
                return ($this->a) / ($this->b ) ; 
            }

       }

       $tinhtoan = new TinhToan(5,10) ;

       echo "<br>Kết Quả Phép Tính Cộng 5 với 10: " . $tinhtoan->Cong();
       echo "<br>Kết Quả Phép Tính trừ 5 với 10: " . $tinhtoan->Tru();
       echo "<br>Kết Quả Phép Tính Nhân 5 với 10: " .  $tinhtoan->Nhan();
       echo "<br>Kết Quả Phép Tính Chia 5 với 10: " . $tinhtoan->Chia();

       //---------------------------------------------------------------------------------//

       echo " <br> <h2>Bài 2 : </h2> " ;

       class ConNguoi {
           public $ten ; 
           public $tuoi ;
           public $gioi_tinh;
           public $ngay_sinh;
           public $can_nang;
           public $chieu_cao;
           
       };

       class VanDongVien extends ConNguoi {
           public $so_huy_chuong ;
           public $cac_mon_da_thi_dau = [] ;

           function __construct( $ten , $tuoi , $gioi_tinh , $ngay_sinh , $can_nang , $chieu_cao ,$so_huy_chuong )
           {
               $this->ten = $ten ;
               $this->tuoi= $tuoi ;
               $this->gioi_tinh = $gioi_tinh ;
               $this->ngay_sinh = $ngay_sinh ;
               $this->can_nang = $can_nang ;
               $this->chieu_cao = $chieu_cao ;
               $this->so_huy_chuong = $so_huy_chuong ;
           }

           function HienThiThongTin()
           {
               $gioi_tinh = ($this->gioi_tinh == 0 ) ? "Nam" : (($this->gioi_tinh == 1)?"nữ" : "không xác định");
               echo(" - Họ Tên : $this->ten <br> - Tuổi : $this->tuoi <br> - Ngày Sinh : $this->ngay_sinh <br>  - Giới Tính : $gioi_tinh <br>  - Cân Nặng :  $this->can_nang <br>   - Chiều cao :  $this->chieu_cao <br> -  Số huy chương : $this->so_huy_chuong <br> " ) ;
               echo("- các môn đã thi đấu : ");
               foreach( $this->cac_mon_da_thi_dau as $key => $mon)
               {
                   echo $mon . "<br>" ;
                   echo " - $mon  " ;
               } ;
           }

           function ThiDau($mon_thi_dau , $so_huy_chuong)
           {
               
                
              if( ($this->chieu_cao <= $mon_thi_dau->dieu_kien_chieu_cao ) || ($this->can_nang <= $mon_thi_dau->dieu_kien_can_nang )){
                            $this->so_huy_chuong -= $so_huy_chuong;
              }
              else
              {
                  $this->cac_mon_da_thi_dau[] = $mon_thi_dau->ten_mon_thi_dau ;
              }
               
                
           }

       }
   

       class MonThiDau
       {
           public $ten_mon_thi_dau ;
           public $dieu_kien_chieu_cao ;
           public $dieu_kien_can_nang ; 

           function __construct($ten_mon , $chieu_cao , $can_nang)
           {
                 $this->ten_mon_thi_dau = $ten_mon ;
                 $this->dieu_kien_chieu_cao = $chieu_cao ;
                 $this->dieu_kien_can_nang = $can_nang ;
           }
       }


       $mon_vo = new MonThiDau("võ",170,50);

       $mon_boi = new MonThiDau("bơi",170,50);

       $NguyenVanA = new VanDongVien("nguyễn Văn A",22,0,"10-9-2001",51,172,3);

       $NguyenVanA->ThiDau($mon_vo , 1) ;
       $NguyenVanA->ThiDau($mon_boi , 1) ;

       $NguyenVanA->HienThiThongTin();

       




?>