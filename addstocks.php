echo "<div class='container-fluid p-4 border border-dark col-sm-4 offset-4'>
            <form class='' action='#' method='POST'>
                <div class='form-group'>
                    <label>Select Blood Group</label>
                    <select name='bgroup'>
                        <option>O+</option>
                        <option>A+</option>
                        <option>B+</option>
                        <option>AB+</option>
                        <option>O-</option>
                        <option>A-</option>
                        <option>B-</option>
                        <option>AB-</option>
                    </select>
                </div>
                <div class='form-group'>
                    <label>Add Stocks:</label>
                    <input type='number' name='stock' class='form-control' placeholder='Stocks'>
                </div>
                <button type='submit' name='add1' class='btn btn-outline-danger col-md-3 offset-4'>Add</button>
            </form></div>";

            if(isset($_POST['add1']))
            {
                $bg=$_POST['bgroup'];
                $st=$_POST['stock'];

                $qry = "UPDATE blood SET stocks=stocks+('$st') WHERE bgroup=('$bg')";

                if ($conn->query($qry) === TRUE) 
                {
                    echo "Stocks added Successfully";
                } 
                else 
                {
                    echo "Error: " . $qry . "<br>" . $conn->error;
                }
            }