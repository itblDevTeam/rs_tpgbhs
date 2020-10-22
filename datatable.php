<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/select/1.3.1/css/select.dataTables.min.css">
    <link rel="stylesheet" href="https://editor.datatables.net/extensions/Editor/css/editor.dataTables.min.css">
    <!-- datatable css  -->


    <title>Hello, world!</title>
</head>

<body>
    <table id="example" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th></th>
                <th>First name</th>
                <th>Position</th>
                <th>Office</th>
                <th width="18%">Start date</th>
                <th>Salary</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td></td>
                <td>A</td>
                <td>A</td>
                <td>A</td>
                <td>A</td>
                <td>A</td>
            </tr>
        </tbody>
    </table>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


    <!-- datatable js  -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.3.1/js/dataTables.select.min.js"></script>
    <script src="https://editor.datatables.net/extensions/Editor/js/dataTables.editor.min.js"></script>


    <script>
        var editor; // use a global for the submit and return data rendering in the examples

        $(document).ready(function() {
            editor = new $.fn.dataTable.Editor({
                ajax: "../php/staff.php",
                table: "#example",
                fields: [{
                    label: "First name:",
                    name: "first_name"
                }, {
                    label: "Last name:",
                    name: "last_name"
                }, {
                    label: "Position:",
                    name: "position"
                }, {
                    label: "Office:",
                    name: "office"
                }, {
                    label: "Extension:",
                    name: "extn"
                }, {
                    label: "Start date:",
                    name: "start_date",
                    type: "datetime"
                }, {
                    label: "Salary:",
                    name: "salary"
                }]
            });

            $('#example').on('click', 'tbody td:not(:first-child)', function(e) {
                editor.inline(this, {
                    onBlur: 'submit'
                });
            });

            $('#example').DataTable({
                dom: "Bfrtip",
                ajax: "../php/staff.php",
                columns: [{
                        data: null,
                        defaultContent: '',
                        className: 'select-checkbox',
                        orderable: false
                    },
                    {
                        data: "first_name"
                    },
                    {
                        data: "last_name"
                    },
                    {
                        data: "position"
                    },
                    {
                        data: "office"
                    },
                    {
                        data: "start_date"
                    },
                    {
                        data: "salary",
                        render: $.fn.dataTable.render.number(',', '.', 0, '$')
                    }
                ],
                order: [1, 'asc'],
                select: {
                    style: 'os',
                    selector: 'td:first-child'
                },
                buttons: [{
                        extend: "create",
                        editor: editor
                    },
                    {
                        extend: "edit",
                        editor: editor
                    },
                    {
                        extend: "remove",
                        editor: editor
                    }
                ]
            });
        });
    </script>


</body>

</html>