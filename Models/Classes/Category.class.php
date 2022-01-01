<?php

class Category extends DbController {
    public function getCategories($table = 'category') {
        $sql = "SELECT * FROM {$table}";
        $result = $this->conn->query($sql) or die($this->conn->error);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $cats[] = $row; 
            }
        }
        return $cats ?? [];
    }

    public function viewCategories(array $cats):string {
        $html = '<ul class="dropdown-menu " aria-labelledby="drop">
                <li><hr  class="m-0"><li>';
        if (empty($cats)) {
            $html .= '<li><a class="dropdown-item fw-bold" href="#">Nothing Avalible</a></li>';
        }else {
            foreach ($cats as $cat) {
                $html .='<li>
                            <a class="dropdown-item fw-bold" href="/'.$cat['id'].'">'.$cat['category_name'].'</a>
                        </li>';
            }
            $html .= '<li><hr  class="m-0"><li>
                    </ul>';
        }
        return $html;
    }
}