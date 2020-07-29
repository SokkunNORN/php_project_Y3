
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>

<script>    
    <?php
        if ($data['page'] === "carList/index") :
    ?>
        $(document).ready(function() {
            $('#car_list').DataTable();
        })
    <?php
        endif;
    ?>
</script>

<script src="src/js/vue/vue.js"></script>
<script src="src/js/index.js"></script>

</body>
</html>
