import java.util.Random;
public class Java_2{
    //*********Found**********
  public static void main(String args[]){
    Random random = new Random();
    //*********Found**********
    float x = random.nextFloat();//����0.0��1.0֮���һ��������
    //*********Found**********
    int n = Math.round(21*x);  //����20���ڵ�һ������
    long f = 1 ;  //����׳˵Ľ��
    int k = 1 ;  //ѭ������
    do {
    //*********Found**********
       f*= k++;
    }while(k<=n);
    System.out.println(n+"!= "+f);
  }
}
