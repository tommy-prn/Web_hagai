<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="4_HTML.css" type="text/css">
    </head>
    <body>
        <div class="header">
            <div class="header-left">
                <span>
                    DumbSocmed
                </span>
            </div>
                <div class="header-right">
                    <button>
                        <span>
                            Add Post
                        </span>
                    </button>
                </div>
            </div>
       <?php
            $connection = mysqli_connect("127.0.0.1", "root", "", "soal_4_dw");
            if (!$connection) {
                echo "Tidak Dapat Masuk Ke Jaringan";
                exit;
            }

            $result = $connection->query("SELECT * FROM post_tb");
            $rows = $result->fetch_all(MYSQLI_ASSOC);
            for ($i = 0; $i < count($rows); $i++) {
                echo("<div class='anjay'>
                <h1 class = 'id'>" . $rows[$i]["id"] . "</h1>
                <p class = 'content'>" . $rows[$i]["content"] . "</p>
                <p class = 'created'>By: " . $rows[$i]["createdBy"] . "</p>
                </div>");
            }
            $connection->close();
       ?>
    </body>
</html>