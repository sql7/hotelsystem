<?php
$con = mysql_connect("localhost","root","123456");
$select_db = db_Hotel('admin');
if (!$select_db) {
    die("could not connect to the db:\n" .  mysql_error());
}
?>

 <div class="main-content">
            <div class="breadcrumbs" id="breadcrumbs">
                <script type="text/javascript">
                    try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
                </script>

                <ul class="breadcrumb">
                    <li>
                        <i class="icon-home home-icon"></i>
                        <a href="account.php">��ҳ</a>
                    </li>

                    <li class="active">
                        <a href="account.php">��������</a>
                    </li>
                </ul><!-- .breadcrumb -->
            </div>

            <div class="page-content">


                <div class="row">
                    <div class="col-xs-12">
                        <!-- PAGE CONTENT BEGINS -->



                        <div class="row">
                            <div class="col-xs-12">
                                <h3 class="header smaller lighter blue">��������</h3>
                                <div class="table-header">
                                    ȫ������
                                </div>

                                <div class="table-responsive">
                                    <table id="sample-table-2" class="table table-striped table-bordered table-hover">
                                        <thead>
                                        <tr>
                                            <th class="center">
                                                <label>
                                                    <input type="checkbox" class="ace" />
                                                    <span class="lbl"></span>
                                                </label>
                                            </th>
                                            <th class="center">�������</th>
                                            <th class="center">�Ƶ�id</th>
                                            <th class="hidden-480 center">��ϵ��</th>
                                            <th class="hidden-480 center">���</th>
                                            <th class="center">����״̬</th>
                                            <th class="center">����</th>
                                        </tr>
                                        </thead>

                                        <tbody>
                                        <?php
                                        require_once '../model/PdoMySQL.class.php';
                                        require_once '../model/config.php';
                                        require_once '../controller/utils/showHelper.php';
                                        $helper = ShowHelper::getInstance();
                                        $pdoMysql = new PdoMySQL();
                                        $allrows = $pdoMysql->find("order");
                                        foreach($allrows as $row){
                                            echo '<tr>';
                                            echo '<td class="center">';
                                            echo '<label>';
                                            echo '<input type="checkbox" class="ace" />';
                                            echo '<span class="lbl"></span>';
                                            echo '</label>';
                                            echo '</td>';

                                            echo '<td class="center" id="hotelName">'.$row['orderId'].'</td>';
                                            echo '<td class="hidden-480 center">'.$row['hotelId'].'</td>';
                                            echo '<td class=" center">'.$row['linkman'].'</td>';
                                            echo '<td class="hidden-480 center">'.$row['totalPrice'].'</td>';
                                            echo '<td class=" hidden-480 center">'.$helper->getOrderStatus($row['status']).'</td>';
                                            echo '<td class="center">';
                                            echo '<div class="visible-md visible-lg hidden-sm hidden-xs action-buttons">';
                                            echo '<a  class="btn btn-xs btn-info"  role="button" href=""><i class="icon-remove bigger-120">��������</i></a>';
                                            echo '</div>';
                                            echo '<div class="visible-xs visible-sm hidden-md hidden-lg ">';
                                            echo '<div class="inline position-relative center">';
                                            echo '<button class="btn btn-minier btn-primary dropdown-toggle" data-toggle="dropdown">';
                                            echo '<i class="icon-cog icon-only bigger-110"></i>';
                                            echo '</button>';
                                            echo '<ul class="dropdown-menu dropdown-only-icon dropdown-yellow pull-right dropdown-caret dropdown-close">';
                                            echo '<li>';
                                            echo '<a  class="btn btn-xs btn-info"  role="button" href=""><i class="icon-remove bigger-120">ɾ</i></a>';

                                            echo '</li>';
                                            echo '<li>';
                                            echo '<a  class="btn btn-xs btn-info"  role="button" href="" ><i class="icon-edit bigger-120">��</i></a>';

                                            echo '</li>';
                                            echo '</ul>';
                                            echo '</div>';
                                            echo '</div>';
                                            echo '</td>';
                                            echo '</tr>';
                                        }


                                        ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div id="modal-table" class="modal fade" tabindex="-1">

                        </div><!-- PAGE CONTENT ENDS -->
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.page-content -->
        </div><!-- /.main-content -->
                                        

                                        ?>