//��2��20��ż��ȥ��ʼ������ 
import javax.swing.*;

public class Java_1{
   public static void main( String args[] ){
      final int ARRAY_SIZE = 10;
      int n[];                    //������������
      String output = "";
      //*********Found*********
      n = new int[ ARRAY_SIZE ];  //��������
      //�����鸳ֵ
      for ( int i = 0; i < n.length; i++ ) 
         n[ i ] = 2 + 2 * i;
      output += "�����±�\tֵ\n";
      for ( int i = 0; i < n.length; i++ ) 
         output += i + "\t" + n[ i ] + "\n";
      //*********Found**********
      JTextArea outputArea = new JTextArea( 11, 10 );
      outputArea.setText( output );
      //*********Found**********
      JOptionPane.showMessageDialog( null, outputArea,
         "��2��20��ż��ȥ��ʼ������",
         JOptionPane.INFORMATION_MESSAGE );
      System.exit( 0 );
   }
}
