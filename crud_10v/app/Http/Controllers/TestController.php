<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class TestController extends Controller
{
    // crud,uppercase,unique,first 3chard,chard position,length,replace,concat,order,in,not in,exclude single data,end_charc,end_char_contain,between,order,odd,even,5th highest,same name,sec high both,twice row, first 50,last record, first 50,last record, first row,current date time,same struc table,charc word

    
    function test(){

      // $create =  DB::select('CREATE TABLE queries (id integer(200) unsigned auto_increment PRIMARY KEY, name varchar(255),mobile varchar(255),created_at timestamp DEFAULT current_timestamp)');

     // $insert = DB::select("INSERT INTO queries (name,mobile) VALUES('rahul','861270351')");

     // $update = DB::select('UPDATE queries SET name= "puja" where id =3');

     // $delete = DB::select('DELETE FROM queries where id = 3');

     // return DB::select("select upper(name) from queries");   // upper not uppercase

     //return DB::select("select DISTINCT name from queries");

     // return DB::select("select substring(name,1,3) FROM queries");
                    // find position of alphabet a in firstname col "bharti" from table
     // return DB::select("select instr('bharti','a') from queries where name = 'bharti'"); 

      //fetch unique values of col from table and print its length

     // return DB::select("select distinct name,length(name) from queries");

                // print firstname from table after replacinf 'a' with 'A'
     // return DB::select("select replace(name,'a','A') from queries where name = 'bharti'");


              // print firstname and lastname from table into single col full name
     
     // return DB::Select("Select concat(name, ' ',mobile) as full_detail from queries");

               // print all details from table order by col 1 asc order and col 2 desc order
     // return DB::select('select * from queries order by name ASC,mobile DESC');


      // print details of table with first name as "bharti" and 'arti' from table
     // return DB::select("select name from queries where name in('arti','bharti')");

      //print details of table excluding first name as "bharti" and 'arti' from table
     //return DB::select("select * from queries where name NOT in('arti','bharti')");


      // print details of table whose first name ends with 'a'
     // return DB::select("select * from queries where name like '%i'");   //like is operator not 'string'

     // print details of table whose first name ends with 'a' and contains 6 alphabets

    //  return DB::select("select * from queries where name like '%____l'");

     // print details of table whose name lies b/w bharti and rahul

     // return DB::select("select id,name from queries where name between 'bharti' and 'rahul'"); // first and last values will come. 
  
      // fetch count of table having firstname 'bharti'

      // return DB::select("select name,count(*) as total from queries group by name having name='rahul'");

      // fetch full names with price >= 100 and <=200
     // return DB::select("select name from queries where name between 'bharti' and 'rahul'");

      // fetch no of customers for each firstname in descending order
      // return DB::select("select name,count(name) as total from queries group by name order by count(name) DESC");


      // show only odd rows from table
      // return DB::select("select * from queries where id % 2 != 0");


      // show only even rows in table
      //return DB::select("select * from queries where id % 2=0");

  
      // show top n say 5 records of table order by descending id
      //  return DB::select("select * from queries order by id DESC limit 5");

      // fetch 4th highest price from table

      //return DB::select("select * from queries order by price DESC limit 3,1");

      // fetch list of customers with same price

      // return DB::select("select col1.* from queries col1, queries col2 where col1.price = col2.price and col1.id != col2.id");


      // show one row twice in table
      // return DB::select("select * from queries UNION ALL select * from queries order by id ASC");

      // fetch first 50% records from table
     //   return DB::select("select * from queries where id = (select count(id/2) from queries)");


      //fetch price that have less than 4 people in it

     // return DB::select("select price from queries where price <= ('select count(price)<4')");
       // return DB::select('select price, count(price) as price_count from queries group by price having count(price)<4');

      // show all firstname along with no of people in there
      //return DB::select("select name,count(name) from queries group by name");
  
     // fetch last record from table

      //return DB::select('select * from queries where id = (select max(id) from queries)');
    //  return DB::select("select * from queries order by id DESC limit 1");


     // fetch first row of table

      //return DB::select("select * from queries where id = (select min(id) from queries)");
     // return DB::select("select * from queries order by id ASC limit 1");

    
    //fetch last five records from table
     // return DB::select("select * from queries order by id DESC limit 3");

    
     // fetch firstname along with max price in each of these firstname
     // return DB::select("select name,max(price) from queries group by name");

      // fetch firstname who has highest price
      // return DB::select("select name from queries where price = (select max(price) from queries)");

      // show current date time
    //  return DB::select('select now()');
     // return DB::select('select curdate()');

      // create new table consist of data and structure copied from other table
     // return DB::select("CREATE TABLE my_queries AS select * from queries");

     // update price of all the firstname bharti subject to 900
    //  return DB::select("UPDATE queries SET price = 4500 where name = 'bharti'");


      // find average price for each firstname
    //  return DB::select("select name,avg(price) from queries group by name");

      // show top 3 students with highest price
     // return DB::select('select * from queries order by price DESC limit 3');

      // find no of customers in each firstname who have price greater than 300

      // return DB::select("select name, count(name) from queries where price >300 group by name");

      // return DB::select('select name,count(id) as high_price_count from queries where price > 300 group by name');

      // find firstname who have same price as arti

      // return DB::select("select name from queries where price = (select price from queries where name = 'arti')");


    //  common_records

      return DB::select("select * from queries INTERSECT select * from queries");

    }


}
