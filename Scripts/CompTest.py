import java.io.*;

 class Record
{
   String first;
   String last;
   String date;

  public Record(String first, String last, String date){
       this.first = first;
       this.last = last;
       this.date = date;
  }

  public static void main(String args[]){
   try{
    FileInputStream fstream = new FileInputStream("/var/www/html/test.txt");
          DataInputStream in = new DataInputStream(fstream);
          BufferedReader br = new BufferedReader(new InputStreamReader(in));
          String strLine;
          while ((strLine = br.readLine()) != null)   {
   String[] tokens = str.split(" ");
   Record record = new Record(tokens[0],tokens[1],tokens[2]);//process record , etc

   }
   in.close();
   }catch (Exception e){
     System.err.println("Error: " + e.getMessage());
   }
 }
}


with open('/var/www/html/test.txt', 'r') as file:
    data = file.read().replace('\n', '')
    print data

str = 'ip-dream g-suit-pro'
c = str.split(' ')
print(c)

