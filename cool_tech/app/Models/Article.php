<?php
/*-----------------------------------------------------------------------------------------------------------------------------
Article Model:  
    -   Interacts with the 'cool_tech' database and retrieves objects' information.
    -   Defines the primary key and table name for the 'articles' table in the database.
----------------------------------------------------------------------------------------------------------------------------------*/

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    // Define PK and table name for articles table.
    protected $table = "articles";
    protected $primaryKey = "article_id";

}
