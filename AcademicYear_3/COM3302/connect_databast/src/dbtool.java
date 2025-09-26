
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;

public class dbtool {

    private Connection connection = null;
    private Statement stmt = null;

    dbtool() {
        System.out.println("***** Studenet Constructor ******");
        // Database connection properties
        String url = "jdbc:mysql://localhost:3306/Student_his";
        String username = "root";
        String password = "";
        try {
            // Load the MySQL JDBC driver
            Class.forName("com.mysql.cj.jdbc.Driver");
            // Establish the database connection
            connection = DriverManager.getConnection(url, username, password);
            // Print a success message
            System.out.println("Database connection successful!");
            // Statement
            stmt = connection.createStatement();
            String sql = "CREATE TABLE IF NOT EXISTS  student " +
                    "(id char(8) NOT NULL," +
                    "name char(30) NOT NULL," +
                    "address char(50) NOT NULL," +
                    "Tel char(10) NOT NULL," +
                    "age int(3) NOT NULL)";

            int i = stmt.executeUpdate(sql);
            System.out.println("Table Created at " + i);

        } catch (ClassNotFoundException e) {
            // MySQL JDBC driver not found
            System.out.println("MySQL JDBC driver not found!");
            e.printStackTrace();
        } catch (SQLException e) {
            // Error establishing connection
            System.out.println("Failed to connect to the database!");
            e.printStackTrace();
        }
    }

    public void displayAllData() {
        System.out.println("***** In Display All Data ******");
        try {
            Statement stmt = connection.createStatement();
            ResultSet rs = stmt.executeQuery("Select * From student");
            while (rs.next()) {
                // Display values
                System.out.print("ID: " + rs.getString("id"));
                System.out.print(", Name: " + rs.getString("name"));
                System.out.print(", Address: " + rs.getString("address"));
                System.out.print(", Telephone: " + rs.getString("Tel"));
                System.out.println(", age: " + rs.getString("age"));
            }
        } catch (Exception e) {
            System.err.println(e.getClass().getName() + ": " + e.getMessage());
            System.exit(0);
        }
    }

    public void CloseDb() {
        System.out.println("***** Close Data ******");
        // Close the database connection
        if (connection != null) {
            try {
                connection.close();
            } catch (SQLException e) {
                e.printStackTrace();
            }
        }
    }

    public void insertData(String id, String name, String address, String tel, int age) {
        System.out.println("***** Insert Data ******");
        String sql;
        sql = "INSERT INTO Student (ID,NAME,ADDRESS,TEL,AGE) " +
                "VALUES('" + id + "','" + name + "','" + address + "', '" + tel + "', '" + age + "');";

        System.out.println(sql);
        try {
            Statement stmt = connection.createStatement();
            stmt.executeUpdate(sql);
        } catch (Exception e) {
            System.err.println(e.getClass().getName() + ": " + e.getMessage());
            System.exit(0);
        }
    }

    // public List<Student_his> selectAll(){
    // System.out.println("***** SELECT ALL ******");
    // String sql = "SELECT * FROM Student;";
    // List<Student_his> data=null;
    // ResultSet rs ;
    // try{
    // rs = stmt.executeQuery(sql);
    // while ( rs.next() ) {
    // String id = rs.getString("id");
    // String name = rs.getString("name");
    // String address = rs.getString("address");
    // String tel = rs.getString("tel");
    // byte age = rs.getByte("age");

    // Student_his obj = new Student_his(id, name, address,tel,age);
    // data.add(obj);
    // }
    // return data;
    // }catch( Exception e ) {
    // System.err.println( e.getClass().getName() + ": " + e.getMessage() );
    // System.exit(0);
    // return data;
    // }
    // }

    /*
     * public void UpdateData(String id, String name, String address,String tel,int
     * age){
     * System.out.println("***** Update ******");
     * String sql = "UPDATE student set ";
     * sql =sql+ " Name = '"+name+"',";
     * sql =sql+ " Address = '"+address;
     * sql =sql+ "' ,Tel = '"+tel+"',";
     * sql =sql+ " Age = " + age;
     * sql =sql+ " where id='"+id+"';";
     * try{
     * stmt.executeUpdate(sql);
     * // conn.commit();
     * }catch(Exception e) {
     * System.err.println( e.getClass().getName() + ": " + e.getMessage() );
     * System.out.println(sql);
     * System.exit(0);
     * }
     * }
     */
}