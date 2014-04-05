/**
 * 
 */
package justin.util;

/**
 * @author Justin Wu
 * 
 */
public class Arrays {
    private Arrays() {
    }

    public static <T extends Comparable<? super T>> int binarySearch(T[] arr, T x) {
        return binarySearch(arr, x, new Collections.DefaultComparator<T>());
    }

    public static <T> int binarySearch(T[] arr, T x, Comparator<? super T> cmp) {
        int low = 0, mid = 0;
        int high = arr.length;
        while (low < high) {
            mid = (low + high) / 2;
            if (cmp.compare(x, arr[mid]) > 0) {
                low = mid + 1;
            } else {
                high = mid;
            }
        }
        if (low == arr.length || cmp.compare(x, arr[low]) != 0) {
            return -(low + 1);
        }
        return low;
    }
}
