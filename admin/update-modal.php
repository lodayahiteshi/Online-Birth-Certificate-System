<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Take Action</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table class="table table-bordered table-hover data-tables">

                    <form method="post" name="approve">

                        <tr>
                            <th>Remark :</th>
                            <td>
                                <textarea name="remark" placeholder="Remark" rows="12" cols="14" class="form-control wd-450" required="true"></textarea>
                            </td>
                        </tr>

                        <tr>
                            <th>Status :</th>
                            <td>

                                <select name="status" id="status" class="form-control wd-450" required="true">
                                    <option value="Verified" selected="true">Verified</option>
                                    <option value="Rejected">Rejected</option>
                                </select>
                            </td>
                        </tr>
                        <!-- <?php
                                //$status = $_POST['status'];

                                $email = "sanika.dk@somaiya.edu";
                                $subject = "Confirmation of Birth Certificate";
                                $stat = '<p id="demo"></p>';
                                $body = "Your Certificate has been " . $stat . " Visit - http://localhost:99/online-birth-certificate-system/user/index.php";
                                echo '<a href = "mailto:' . $email . '?subject=' . rawurlencode($subject) . '&body=' . rawurlencode($body) . '" onclick="getStatus()">Send Mail</a>' ?> -->

                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" name="update" class="btn btn-primary">Update</button>

                </form>
                <!-- <script>
                    function getStatus() {
                        for (i = document.approve.status.options.length - 1; i >= 0; i--) {
                            if (document.approve.status.options[i].selected) {
                                console.log("Function Called");
                                const x = document.approve.status.options[i].value;
                                console.log(x);
                                pid = document.getElementById('demo').innerHTML = x;
                                console.log(pid);
                                // document.approve.demo.innerText = x;
                                // console.log("innerhtml added");
                            }
                        }
                    }
                </script> -->
            </div>
        </div>
    </div>
</div>