//用2至20的偶数去初始化数组 
import javax.swing.*;

public class Java_1{
   public static void main( String args[] ){
      final int ARRAY_SIZE = 10;
      int n[];                    //引用整形数组
      String output = "";
      //*********Found*********
      n = new int[ ARRAY_SIZE ];  //分配数组
      //给数组赋值
      for ( int i = 0; i < n.length; i++ ) 
         n[ i ] = 2 + 2 * i;
      output += "数组下标\t值\n";
      for ( int i = 0; i < n.length; i++ ) 
         output += i + "\t" + n[ i ] + "\n";
      //*********Found**********
      JTextArea outputArea = new JTextArea( 11, 10 );
      outputArea.setText( output );
      //*********Found**********
      JOptionPane.showMessageDialog( null, outputArea,
         "用2至20的偶数去初始化数组",
         JOptionPane.INFORMATION_MESSAGE );
      System.exit( 0 );
   }
}
