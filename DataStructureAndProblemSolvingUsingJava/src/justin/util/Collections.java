/**
 * 
 */
package justin.util;

import java.util.NoSuchElementException;

/**
 * @author Justin Wu
 * 
 */
public class Collections {
    public Collections() {

    }

    public static <T> Comparator<T> reverseOrder() {
        return new ReverseComparator<T>();
    }

    private static class ReverseComparator<T> implements Comparator<T> {
        @SuppressWarnings("unchecked")
        public int compare(T t1, T t2) {
            return -((Comparable<T>) t1).compareTo(t2);
        }
    }

    static class DefaultComparator<T extends Comparable<? super T>> implements Comparator<T> {
        public int compare(T t1, T t2) {
            return t1.compareTo(t2);
        }
    }

    public static <T extends Object & Comparable<? super T>> T max(Collection<? extends T> coll) {
        return max(coll, new DefaultComparator<T>());
    }

    public static <T> T max(Collection<? extends T> coll, Comparator<? super T> cmp) {
        if (coll.size() == 0) {
            throw new NoSuchElementException();
        }
        Iterator<? extends T> itr = coll.iterator();
        T maxValue = itr.next();
        while (itr.hasNext()) {
            T current = (T) itr.next();
            if (cmp.compare(current, maxValue) > 0) {
                maxValue = current;
            }
        }
        return maxValue;
    }
}
