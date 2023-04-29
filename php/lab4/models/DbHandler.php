
<?php
interface DbHandler
{
    public function connect();
    public function get_all_data_per_page($fields = array());
    public function get_record_by_id($id);
}
