/**
 * 
 */
package justin.util;

/**
 * @author Justin Wu
 * 
 */
public interface Queue<T> extends Collection<T> {
    T element();

    T remove();
}
