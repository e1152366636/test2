import java.util.Random;
public class Java_2{
    //*********Found**********
  public static void main(String args[]){
    Random random = new Random();
    //*********Found**********
    float x = random.nextFloat();//产生0.0与1.0之间的一个浮点数
    //*********Found**********
    int n = Math.round(21*x);  //构造20以内的一个整数
    long f = 1 ;  //保存阶乘的结果
    int k = 1 ;  //循环变量
    do {
    //*********Found**********
       f*= k++;
    }while(k<=n);
    System.out.println(n+"!= "+f);
  }
}
