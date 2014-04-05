/**
 * 
 */
package justin.util;

/**
 * @author Justin Wu
 * 
 */
public interface SortedSet<T> extends Set<T> {
    Comparator<? super T> comparator();

    T first();

    T last();
}
