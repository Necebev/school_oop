

<?php

$tableBody = "";
foreach ($classes as $class) {
    $tableBody .= <<<HTML
            <tr>
                <td>{$class->id}</td>
                <td>{$class->name}</td>
                <td>{$class->year}</td>
                <td class='flex float-right'>
                    <form method='post' action='/classes/edit'>
                        <input type='hidden' name='id' value='{$class->id}'>
                        <button type='submit' name='btn-edit' title='Módosít'><i class='fa fa-edit'></i></button>
                    </form>
                    <form method='post' action='/classes'>
                        <input type='hidden' name='id' value='{$class->id}'>    
                        <input type='hidden' name='_method' value='DELETE'>
                        <button type='submit' name='btn-del' title='Töröl'><i class='fa fa-trash trash'></i></button>
                    </form>
                </td>
            </tr>
            HTML;
}

$html = <<<HTML
        <table id='admin-classes-table' class='admin-classes-table'>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Osztály</th>
                    <th>Év</th>
                    <th>
                        <form method='post' action='/classes/create'>
                            <button type="submit" name='btn-plus' title='Új'><i class='fa fa-plus plus'></i>&nbsp;Új</button>
                        </form>
                    </th>
                </tr>
            </thead>
             <tbody>%s</tbody>
            <tfoot>
            </tfoot>
        </table>
        HTML;

echo sprintf($html, $tableBody);





