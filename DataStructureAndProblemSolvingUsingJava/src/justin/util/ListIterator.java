/**
 * 
 */
package justin.util;

/**
 * @author Justin Wu
 * 
 */
public interface ListIterator<T> extends Iterator<T> {
    boolean hasPrevious();

    T previous();

    void remove();
}
