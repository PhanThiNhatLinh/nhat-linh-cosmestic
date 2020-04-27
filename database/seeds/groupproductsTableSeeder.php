<?php

use Illuminate\Database\Seeder;

class GroupproductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('groupproducts')->delete();
        
        \DB::table('groupproducts')->insert(array (
            0 => 
            array (
                'group_code' => 1,
                'group_name' => 'Chăm Sóc Tóc',
                'description' => 'Hãy để Dòng sản phẩm chăm sóc tóc của chúng tôi nuôi dưỡng mái tóc bạn mỗi ngày. Đa dạng từ dầu gội đến kem ủ, chúng tôi có tất cả những gì bạn cần cho một mái tóc đẹp và khỏe từ gốc đến ngọn
Với những sản phẩm chăm sóc tóc của chúng tôi, mái tóc đẹp không còn là mơ ước. Tóc bạn nay thật sự được nuôi dưỡng dài lâu. Đó là sự chăm sóc tuyệt vời mà bạn có thể hoàn toàn tin tưởng. Vì tóc chỉ đẹp khi thật sự chắc khỏe, chúng tôi đã kết hợp những công nghệ dưỡng tóc tiên tiến nhất để mang đến giải pháp không chỉ phục hồi tức thì vấn đề của tóc mà còn nuôi dưỡng dài lâu giúp tóc bạn đẹp hơn mỗi ngày. Không còn phải đắn đo giữa việc có một mái tóc đẹp và tóc luôn được nuôi dưỡng.

Phục hồi hư tổn, hay giúp tóc bồng bềnh hơn - tất cả những gì bạn cần ở một sản phẩm chăm sóc tóc, chúng tôi đều có thể cho bạn kết quả tốt nhất. Hay bạn muốn tóc thêm bóng mượt, hoặc ngăn rụng tóc, Dove đều có dòng sản phẩm phù hợp',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'group_code' => 2,
                'group_name' => 'Chăm Sóc Da Mặt',
                'description' => 'Khi thế giới quanh ta càng trở nên khắc nghiệt và kém bao dung hơn thì vẻ mềm mại khả ái bên ngoài cùng với sức mạnh tiềm ẩn bên trong của người phụ nữ lại tạo nên sự ảnh hưởng mạnh mẽ và đáng quý hơn bao giờ hết. Làn da chúng ta cũng vậy, cần phải có nền tảng bên trong mạnh mẽ vững chắc thì bên ngoài mới mềm mịn tươi đẹp.Những sản phẩm chăm sóc da mặt của chúng tôi sẽ giúp bạn có một làn da đáng mơ ước',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'group_code' => 3,
                'group_name' => 'Chăm Sóc Cơ Thể',
                'description' => 'Từ chăm sóc đến cách khử mùi cơ thể, tại đây bạn có thể tìm thấy tất cả những thứ bạn cần với sản phẩm của Chăm sóc cơ thể của chúng tôi',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'group_code' => 4,
                'group_name' => 'Trang Điểm',
                'description' => 'Những sản phẩm trang điểm của công ty chúng tôi sẽ luôn bắt kịp xu thế, chất lượng cao, đem đến cho bạn một dung mạo hoàn hảo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'group_code' => 5,
                'group_name' => 'Phụ Kiện',
                'description' => 'Bên cạnh mỹ phẩm thì phụ kiện làm đẹp cũng là một trong những điều mà mọi cô gái đều quan tâm vì nó làm cho họ trở nên đẹp và lung linh hơn trong mắt người khác',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'group_code' => 6,
                'group_name' => 'Thực Phẩm Chức Năng',
                'description' => 'Thực Phẩm Chức Năng đến từ công nghệ sản xuất của các nước hiện đại để giúp bạn tăng cường sức khỏe, đẹp bên ngoài, khỏe từ bên trong. ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}