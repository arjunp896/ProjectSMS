# ProjectSMS

[md syntax](https://www.markdownguide.org/basic-syntax/)
 
[ajax](E:\JAVA\JAVA\Workspace\spring-hibernate\country_foreign_one_to_many\WebContent)


## Prepare 

1 **sql statement**

2 $prepareQuery = **$connection->prepare($sqlStmt);** 

3 $prepareQuery->**bindValue**(":id", $this->studentId);

4 $prepareQuery->**execute();**

- **update => $result:bool** = $prepareQuery->execute();


- **select => $result:array** = $prepareQuery->fetchAll();
