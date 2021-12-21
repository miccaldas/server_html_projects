711<br>
<br>
    # &nsbp;&nsbp;&nsbp;&nsbp; Access &nsbp;&nsbp;&nsbp;&nsbp;<br>
    Access monitor: mysql &nsbp;u [username] &nsbp;p; (will prompt for password)<br>
    Access database: mysql &nsbp;u [username] &nsbp;p [database]<br>
    Create new database: create database [database];<br>
    Select database: use [database];<br>
    logout: exit;<br>
<br>
<br>
    # &nsbp;&nsbp;&nsbp;&nsbp; Information &nsbp;&nsbp;&nsbp;&nsbp;<br>
    Show all databases: show databases;<br>
    Determine what database is in use: select database();<br>
    Show all tables: show tables;<br>
    Show table structure: desc [table];<br>
    List all indexes on a table: show index from [table];<br>
    Explain records: EXPLAIN SELECT * FROM [table];<br>
<br>
    # &nsbp;&nsbp;&nsbp;&nsbp; Adding/Inserting &nsbp;&nsbp;&nsbp;&nsbp;<br>
    Adding a column: ALTER TABLE [table] ADD COLUMN [column] VARCHAR(120);<br>
    Adding a column with an unique, auto&nsbp;incrementing ID: ALTER TABLE [table] \<br>
    ADD COLUMN [column] int NOT NULL AUTO_INCREMENT PRIMARY KEY;<br>
    Inserting a record: INSERT INTO [table] ([column], [column]) VALUES ('[value]', '[value]');<br>
    MySQL function for datetime input: NOW()<br>
    Selecting records: SELECT * FROM [table];<br>
<br>
    # &nsbp;&nsbp;&nsbp;&nsbp; Selecting &nsbp;&nsbp;&nsbp;&nsbp;<br>
            (Selectors: <, >, !=; combine multiple selectors with AND, OR)<br>
    Selecting parts of records: SELECT [column], [another&nsbp;column] FROM [table];<br>
    Selecting specific records: SELECT * FROM [table] WHERE [column] = [value];<br>
    Select records containing [value]: SELECT * FROM [table] WHERE [column] LIKE '%[value]%';<br>
    Select records starting with [value]: SELECT * FROM [table] WHERE [column] LIKE '[value]%';<br>
    Select records starting with val and ending with ue: SELECT * FROM [table] WHERE [column] LIKE '[val_ue]';<br>
    Select a range: SELECT * FROM [table] WHERE [column] BETWEEN [value1] and [value2];<br>
    Select with custom order and only limit: SELECT * FROM [table] WHERE [column]ORDER BY [column] ASC LIMIT [value]; (Order: DESC, ASC)<br>
<br>
    # &nsbp;&nsbp;&nsbp;&nsbp; Updating &nsbp;&nsbp;&nsbp;&nsbp;<br>
    Updating records: UPDATE [table] SET [column] = '[updated&nsbp;value]' WHERE [column] = [value];<br>
<br>
    # &nsbp;&nsbp;&nsbp;&nsbp; Deleting &nsbp;&nsbp;&nsbp;&nsbp;<br>
    Deleting records: DELETE FROM [table] WHERE [column] = [value];<br>
    Delete a range of records: DELETE FROM [table] WHERE id BETWEEN ... AND ...<br>
    Delete all records from a table (without dropping the table itself): DELETE FROM [table];<br>
    Delete all records in a table: truncate table [table];<br>
    Delete a index: DROP INDEX index_name ON table_name;<br>
    Removing table columns: ALTER TABLE [table] DROP COLUMN [column];<br>
    Deleting tables: DROP TABLE [table];<br>
    Deleting databases: DROP DATABASE [database];<br>
<br>
    # &nsbp;&nsbp;&nsbp;&nsbp; Order &nsbp;&nsbp;&nsbp;&nsbp;<br>
    Order output randomly: SELECT * FROM [table] ORDER BY RAND()<br>
    <br>
    # &nsbp;&nsbp;&nsbp;&nsbp; Import/Export Databases &nsbp;&nsbp;&nsbp;&nsbp;<br>
    Export a database dump (more info here): mysqldump &nsbp;u [username] &nsbp;p [database] > db_backup.sql<br>
    Import a database dump (more info here): mysql &nsbp;u [username] &nsbp;p &nsbp;h localhost [database] < db_backup.sql