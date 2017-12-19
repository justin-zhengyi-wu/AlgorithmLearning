public class Solution {

    public static int doIt(int[] arr) {
        if (arr == null || arr.length == 0) {
            return -1;
        }

        int leftSum = 0;
        int rightSum = 0;
        for (int i = 1; i < arr.length; i++) {
            rightSum += arr[i];
        }

        if (leftSum == rightSum) {
            return 0;
        }

        for (int i = 1; i < arr.length; i++) {
            leftSum += arr[i-1];
            rightSum -= arr[i];
            if (leftSum == rightSum) {
                return i;
            }
        }
        return -1;
    }

    public static void main(String[] args)  {

        int[] arr = new int[]{-7,1,5,2,-4,3,0};
        int result = doIt(arr);
        System.out.println(result);
    }
}
